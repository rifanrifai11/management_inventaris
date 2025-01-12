<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangHasTransaksi extends Model
{
    public $table = 'barang_has_transaksi';

    public $fillable = [
        'qty',
        'barang_id',
        'transaksi_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'qty' => 'nullable',
        'barang_id' => 'required',
        'transaksi_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function barang(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Barang::class, 'barang_id');
    }

    public function transaksi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Transaksi::class, 'transaksi_id');
    }
}
