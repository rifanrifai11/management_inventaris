<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public $table = 'pembayaran';

    public $fillable = [
        'total',
        'date_transaction',
        'transaksi_id',
        'metode_pembayaran_id'
    ];

    protected $casts = [
        'total' => 'string',
        'date_transaction' => 'datetime'
    ];

    public static array $rules = [
        'total' => 'nullable|string|max:255',
        'date_transaction' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'transaksi_id' => 'required',
        'metode_pembayaran_id' => 'required'
    ];

    public function metodePembayaran(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\MetodePembayaran::class, 'metode_pembayaran_id');
    }

    public function transaksi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Transaksi::class, 'transaksi_id');
    }
}
