<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = 'supplier';

    public $fillable = [
        'name',
        'kontak',
        'alamat'
    ];

    protected $casts = [
        'name' => 'string',
        'kontak' => 'string',
        'alamat' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:255',
        'kontak' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function barangs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Barang::class, 'supplier_id');
    }
}
