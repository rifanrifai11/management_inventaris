<?php

namespace App\Repositories;

use App\Models\BarangHasTransaksi;
use App\Repositories\BaseRepository;

class BarangHasTransaksiRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'qty',
        'barang_id',
        'transaksi_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return BarangHasTransaksi::class;
    }
}
