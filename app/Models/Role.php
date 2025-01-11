<?php

namespace App\Models;

class Role extends \Spatie\Permission\Models\Role
{
    public $fillable = [
        'name',
        'guard_name'
    ];

    protected $casts = [
        'name' => 'string',
        'guard_name' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'guard_name' => 'required|string|max:255',
    ];

    public function modelHasRole(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\ModelHasRole::class);
    }

    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Permission::class, 'role_has_permissions');
    }
}
