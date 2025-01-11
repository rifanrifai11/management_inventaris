<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'guard_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Permission::class;
    }
}
