<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

class UsersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
        'kontak',
        'address',
        'password',
        'pegawai_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return User::class;
    }
}
