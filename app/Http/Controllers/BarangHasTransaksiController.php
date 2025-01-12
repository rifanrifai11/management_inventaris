<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBarangHasTransaksiRequest;
use App\Http\Requests\UpdateBarangHasTransaksiRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BarangHasTransaksiRepository;
use Illuminate\Http\Request;
use Flash;

class BarangHasTransaksiController extends AppBaseController
{
    /** @var BarangHasTransaksiRepository $barangHasTransaksiRepository*/
    private $barangHasTransaksiRepository;

    public function __construct(BarangHasTransaksiRepository $barangHasTransaksiRepo)
    {
        $this->barangHasTransaksiRepository = $barangHasTransaksiRepo;
    }

    /**
     * Display a listing of the BarangHasTransaksi.
     */
    public function index(Request $request)
    {
        $barangHasTransaksis = $this->barangHasTransaksiRepository->paginate(10);

        return view('barang_has_transaksis.index')
            ->with('barangHasTransaksis', $barangHasTransaksis);
    }

    /**
     * Show the form for creating a new BarangHasTransaksi.
     */
    public function create()
    {
        return view('barang_has_transaksis.create');
    }

    /**
     * Store a newly created BarangHasTransaksi in storage.
     */
    public function store(CreateBarangHasTransaksiRequest $request)
    {
        $input = $request->all();

        $barangHasTransaksi = $this->barangHasTransaksiRepository->create($input);

        Flash::success('Barang Has Transaksi saved successfully.');

        return redirect(route('barangHasTransaksis.index'));
    }

    /**
     * Display the specified BarangHasTransaksi.
     */
    public function show($id)
    {
        $barangHasTransaksi = $this->barangHasTransaksiRepository->find($id);

        if (empty($barangHasTransaksi)) {
            Flash::error('Barang Has Transaksi not found');

            return redirect(route('barangHasTransaksis.index'));
        }

        return view('barang_has_transaksis.show')->with('barangHasTransaksi', $barangHasTransaksi);
    }

    /**
     * Show the form for editing the specified BarangHasTransaksi.
     */
    public function edit($id)
    {
        $barangHasTransaksi = $this->barangHasTransaksiRepository->find($id);

        if (empty($barangHasTransaksi)) {
            Flash::error('Barang Has Transaksi not found');

            return redirect(route('barangHasTransaksis.index'));
        }

        return view('barang_has_transaksis.edit')->with('barangHasTransaksi', $barangHasTransaksi);
    }

    /**
     * Update the specified BarangHasTransaksi in storage.
     */
    public function update($id, UpdateBarangHasTransaksiRequest $request)
    {
        $barangHasTransaksi = $this->barangHasTransaksiRepository->find($id);

        if (empty($barangHasTransaksi)) {
            Flash::error('Barang Has Transaksi not found');

            return redirect(route('barangHasTransaksis.index'));
        }

        $barangHasTransaksi = $this->barangHasTransaksiRepository->update($request->all(), $id);

        Flash::success('Barang Has Transaksi updated successfully.');

        return redirect(route('barangHasTransaksis.index'));
    }

    /**
     * Remove the specified BarangHasTransaksi from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $barangHasTransaksi = $this->barangHasTransaksiRepository->find($id);

        if (empty($barangHasTransaksi)) {
            Flash::error('Barang Has Transaksi not found');

            return redirect(route('barangHasTransaksis.index'));
        }

        $this->barangHasTransaksiRepository->delete($id);

        Flash::success('Barang Has Transaksi deleted successfully.');

        return redirect(route('barangHasTransaksis.index'));
    }
}
