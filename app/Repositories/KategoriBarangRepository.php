<?php

namespace App\Repositories;

use App\Models\KategoriBarang;
use App\Repositories\BaseRepository;

class KategoriBarangRepository extends BaseRepository
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
        return KategoriBarang::class;
    }
}
