<!-- Kode Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_barang', 'Kode Barang:') !!}
    {!! Form::text('kode_barang', null, ['class' => 'form-control', 'maxlength' => 10, 'maxlength' => 10]) !!}
</div>

<!-- Nama Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_barang', 'Nama Barang:') !!}
    {!! Form::text('nama_barang', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Harga Field -->
<div class="form-group col-sm-5">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::number('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-2">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::number('stok', null, ['class' => 'form-control']) !!}
</div>

<!-- Satuan select Field -->
<div class="form-group col-sm-3">
    {!! Form::label('satuan_id', 'Satuan:') !!}
    {!! Form::select('satuan_id', $satuan, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Expired Field -->
<div class="form-group col-sm-2">
    {!! Form::label('expired', 'Expired:') !!}
    {!! Form::date('expired', null, ['class' => 'form-control','id'=>'expired']) !!}
</div>

<!-- Kategori select Field -->
<div class="form-group col-sm-3">
    {!! Form::label('kategori_barang_id', 'Kategori:') !!}
    {!! Form::select('kategori_barang_id', $kategori, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- supplier select Field -->
<div class="form-group col-sm-9">
    {!! Form::label('supplier_id', 'Supplier:') !!}
    {!! Form::select('supplier_id', $suppliers, null, ['class' => 'form-control', 'required']) !!}
</div>


