<?php

namespace App\Repositories;

use App\Models\Pegawai;
use App\Repositories\BaseRepository;

class PegawaiRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'tgl_masuk',
        'jabatan_id',
        'users_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pegawai::class;
    }
}
