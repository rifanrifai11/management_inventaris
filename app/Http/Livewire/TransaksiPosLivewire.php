<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\BarangHasTransaksi;
use App\Models\KategoriBarang;
use App\Models\MetodePembayaran;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Livewire\Component;

class TransaksiPosLivewire extends Component
{
    public $groupBarang,$listMetoPembayaran,$listPelanggan;
    public $selectBarang = [];
    public $metodePembayaranId,$pelangganId,$pegawaiId,$totalPrice;

    public function render() {
        $this->groupBarang = KategoriBarang::all();
        $this->listMetoPembayaran = MetodePembayaran::all();
        $this->listPelanggan = Pelanggan::all();

        $this->totalPrice = collect($this->selectBarang)->sum('total');

        return view('livewire.transaksi-pos-livewire')
            ->extends('layouts.app')
            ->section('content');
    }

    public function addBarang($barangId) {
        if (!isset($this->selectBarang[$barangId])) {
            $barang = Barang::where('id', $barangId)->first();

            $this->selectBarang[$barangId] = [
                'id' => $barang->id,
                'name' => $barang->nama_barang,
                'harga' => $barang->harga,
                'qty' => 1,
                'total' => $barang->harga
            ];
        } else {
            $this->selectBarang[$barangId]['qty'] += 1;
            $this->selectBarang[$barangId]['total'] = $this->selectBarang[$barangId]['qty'] * $this->selectBarang[$barangId]['harga'];
        }
    }

    public function removeProduct($barangId) {
        unset($this->selectBarang[$barangId]);
    }

    public function saveTransaksi() {

        if (empty($this->selectBarang)) {
            return Flash::error('Barang tidak boleh kosong');
        } else if (empty($this->metodePembayaranId)) {
            return Flash::error('Metode Pembayaran tidak boleh kosong');
        }

        DB::beginTransaction();

        try {

            $transaksi = Transaksi::create([
                'total' => $this->totalPrice,
                'pelanggan_id' => $this->pelangganId ?? null,
                'users_id' => Auth::id(),
                'date_transaction' => now(),
            ]);

            Pembayaran::create([
                'transaksi_id' => $transaksi->id,
                'total' => $this->totalPrice,
                'date_transaction' => now(),
                'metode_pembayaran_id' => $this->metodePembayaranId,
            ]);

            foreach ($this->selectBarang as $barang) {
                BarangHasTransaksi::create([
                    'transaksi_id' => $transaksi->id,
                    'barang_id' => $barang['id'],
                    'qty' => $barang['qty'],
                ]);

                Barang::where('id', $barang['id'])->decrement('stok', $barang['qty']);
            }

            $this->selectBarang = [];
            $this->metodePembayaranId = null;
            $this->pelangganId = null;
            $this->pegawaiId = null;
            DB::commit();
            Flash::success('Transaksi berhasil disimpan');
        } catch (\Exception $e) {
            Flash::error($e->getMessage());
        }
    }
}
