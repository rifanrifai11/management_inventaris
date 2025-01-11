<!-- Total Field -->
<div class="col-sm-12">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $transaksi->total }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $transaksi->keterangan }}</p>
</div>

<!-- Date Transaction Field -->
<div class="col-sm-12">
    {!! Form::label('date_transaction', 'Date Transaction:') !!}
    <p>{{ $transaksi->date_transaction }}</p>
</div>

<!-- Pelanggan Id Field -->
<div class="col-sm-12">
    {!! Form::label('pelanggan_id', 'Pelanggan Id:') !!}
    <p>{{ $transaksi->pelanggan_id }}</p>
</div>

<!-- Users Id Field -->
<div class="col-sm-12">
    {!! Form::label('users_id', 'Users Id:') !!}
    <p>{{ $transaksi->users_id }}</p>
</div>

