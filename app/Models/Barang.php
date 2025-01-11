<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Barang extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $table = 'barang';

    public $fillable = [
        'kode_barang',
        'nama_barang',
        'harga',
        'stok',
        'expired',
        'supplier_id',
        'satuan_id',
        'kategori_barang_id',
    ];

    protected $casts = [
        'kode_barang' => 'string',
        'nama_barang' => 'string',
        'harga' => 'decimal:2',
        'expired' => 'date'
    ];

    public static array $rules = [
        'kode_barang' => 'nullable|string|max:10',
        'nama_barang' => 'nullable|string|max:100',
        'harga' => 'nullable|numeric',
        'stok' => 'nullable',
        'expired' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'supplier_id' => 'required'
    ];

    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'supplier_id');
    }

    public function transaksis(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Transaksi::class, 'barang_has_transaksi');
    }

    public function satuan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Satuan::class, 'satuan_id');
    }

    public function kategoriBarang(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\KategoriBarang::class, 'kategori_barang_id');
    }

    public function barangHasTransaksis(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\BarangHasTransaksi::class, 'barang_id');
    }
}
