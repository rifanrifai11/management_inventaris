<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    public $table = 'metode_pembayaran';

    public $fillable = [
        'nama',
        'keterangan'
    ];

    protected $casts = [
        'nama' => 'string',
        'keterangan' => 'string'
    ];

    public static array $rules = [
        'nama' => 'nullable|string|max:255',
        'keterangan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function pembayarans(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\Pembayaran::class, 'metode_pembayaran_id');
    }
}
