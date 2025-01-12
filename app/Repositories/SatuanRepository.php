<?php

namespace App\Repositories;

use App\Models\Satuan;
use App\Repositories\BaseRepository;

class SatuanRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'deskripsi'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Satuan::class;
    }
}
