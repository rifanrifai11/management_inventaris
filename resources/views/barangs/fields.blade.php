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
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::number('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::number('stok', null, ['class' => 'form-control']) !!}
</div>

<!-- Expired Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expired', 'Expired:') !!}
    {!! Form::text('expired', null, ['class' => 'form-control','id'=>'expired']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#expired').datepicker()
    </script>
@endpush

<!-- Supplier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    {!! Form::number('supplier_id', null, ['class' => 'form-control', 'required']) !!}
</div>