<?php

namespace App\Repositories;

use App\Models\Transaksi;
use App\Repositories\BaseRepository;

class TransaksiRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'total',
        'keterangan',
        'date_transaction',
        'pelanggan_id',
        'users_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Transaksi::class;
    }
}
