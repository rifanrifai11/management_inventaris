<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $table = 'transaksi';

    public $fillable = [
        'total',
        'keterangan',
        'date_transaction',
        'pelanggan_id',
        'users_id'
    ];

    protected $casts = [
        'total' => 'decimal:2',
        'keterangan' => 'string',
        'date_transaction' => 'datetime'
    ];

    public static array $rules = [
        'total' => 'required|numeric',
        'keterangan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'pelanggan_id' => 'nullable',
        'users_id' => 'required'
    ];

    public function pelanggan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Pelanggan::class, 'pelanggan_id');
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }

    public function barangs(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Barang::class, 'barang_has_transaksi');
    }

    public function pembayarans(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\Pembayaran::class, 'transaksi_id');
    }

    public function barangHasTransaksis(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\BarangHasTransaksi::class, 'transaksi_id');
    }
}
