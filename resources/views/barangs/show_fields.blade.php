<!-- Kode Barang Field -->
<div class="col-sm-12">
    {!! Form::label('kode_barang', 'Kode Barang:') !!}
    <p>{{ $barang->kode_barang }}</p>
</div>

<!-- Nama Barang Field -->
<div class="col-sm-12">
    {!! Form::label('nama_barang', 'Nama Barang:') !!}
    <p>{{ $barang->nama_barang }}</p>
</div>

<!-- Harga Field -->
<div class="col-sm-12">
    {!! Form::label('harga', 'Harga:') !!}
    <p>{{ $barang->harga }}</p>
</div>

<!-- Stok Field -->
<div class="col-sm-12">
    {!! Form::label('stok', 'Stok:') !!}
    <p>{{ $barang->stok }}</p>
</div>

<!-- Expired Field -->
<div class="col-sm-12">
    {!! Form::label('expired', 'Expired:') !!}
    <p>{{ $barang->expired }}</p>
</div>

<!-- Supplier Id Field -->
<div class="col-sm-12">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{{ $barang->supplier_id }}</p>
</div>

