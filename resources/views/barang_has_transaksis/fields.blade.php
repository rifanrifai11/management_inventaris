<!-- Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty', 'Qty:') !!}
    {!! Form::number('qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Barang Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barang_id', 'Barang Id:') !!}
    {!! Form::number('barang_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Transaksi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaksi_id', 'Transaksi Id:') !!}
    {!! Form::number('transaksi_id', null, ['class' => 'form-control', 'required']) !!}
</div>