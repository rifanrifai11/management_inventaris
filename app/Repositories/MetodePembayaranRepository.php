<?php

namespace App\Repositories;

use App\Models\MetodePembayaran;
use App\Repositories\BaseRepository;

class MetodePembayaranRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nama',
        'keterangan'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return MetodePembayaran::class;
    }
}
