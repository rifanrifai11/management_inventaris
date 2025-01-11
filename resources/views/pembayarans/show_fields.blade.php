<!-- Total Field -->
<div class="col-sm-12">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $pembayaran->total }}</p>
</div>

<!-- Date Transaction Field -->
<div class="col-sm-12">
    {!! Form::label('date_transaction', 'Date Transaction:') !!}
    <p>{{ $pembayaran->date_transaction }}</p>
</div>

<!-- Transaksi Id Field -->
<div class="col-sm-12">
    {!! Form::label('transaksi_id', 'Transaksi Id:') !!}
    <p>{{ $pembayaran->transaksi_id }}</p>
</div>

<!-- Metode Pembayaran Id Field -->
<div class="col-sm-12">
    {!! Form::label('metode_pembayaran_id', 'Metode Pembayaran Id:') !!}
    <p>{{ $pembayaran->metode_pembayaran_id }}</p>
</div>

