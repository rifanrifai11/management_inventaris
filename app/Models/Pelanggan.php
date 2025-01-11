<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public $table = 'pelanggan';

    public $fillable = [
        'nama',
        'alamat',
        'kontak',
        'email',
        'users_id'
    ];

    protected $casts = [
        'nama' => 'string',
        'alamat' => 'string',
        'kontak' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'nama' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:65535',
        'kontak' => 'nullable|string|max:13',
        'email' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'users_id' => 'required'
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }

    public function transaksis(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Transaksi::class, 'pelanggan_id');
    }
}
