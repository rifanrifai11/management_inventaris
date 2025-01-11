<?php

namespace App\Repositories;

use App\Models\Pembayaran;
use App\Repositories\BaseRepository;

class PembayaranRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'total',
        'date_transaction',
        'transaksi_id',
        'metode_pembayaran_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pembayaran::class;
    }
}
