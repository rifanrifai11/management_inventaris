<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $table = 'pegawai';

    public $fillable = [
        'tgl_masuk',
        'jabatan_id',
        'users_id'
    ];

    protected $casts = [
        'tgl_masuk' => 'string'
    ];

    public static array $rules = [
        'tgl_masuk' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'jabatan_id' => 'required',
        'users_id' => 'required'
    ];

    public function jabatan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Jabatan::class, 'jabatan_id');
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}
