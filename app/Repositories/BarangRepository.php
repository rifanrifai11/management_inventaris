<?php

namespace App\Repositories;

use App\Models\Barang;
use App\Repositories\BaseRepository;

class BarangRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'kode_barang',
        'nama_barang',
        'harga',
        'stok',
        'expired',
        'supplier_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Barang::class;
    }
}
