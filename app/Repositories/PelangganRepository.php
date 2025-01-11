<?php

namespace App\Repositories;

use App\Models\Pelanggan;
use App\Repositories\BaseRepository;

class PelangganRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nama',
        'alamat',
        'kontak',
        'email',
        'users_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pelanggan::class;
    }
}
