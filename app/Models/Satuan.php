<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    public $table = 'satuan';

    public $fillable = [
        'name',
        'deskripsi'
    ];

    protected $casts = [
        'name' => 'string',
        'deskripsi' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:255',
        'deskripsi' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function barangs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Barang::class, 'satuan_id');
    }
}
