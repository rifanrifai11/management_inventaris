<?php

namespace App\Repositories;

use App\Models\Jabatan;
use App\Repositories\BaseRepository;

class JabatanRepository extends BaseRepository
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
        return Jabatan::class;
    }
}
