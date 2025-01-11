<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::text('total', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Transaction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_transaction', 'Date Transaction:') !!}
    {!! Form::text('date_transaction', null, ['class' => 'form-control','id'=>'date_transaction']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_transaction').datepicker()
    </script>
@endpush

<!-- Transaksi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaksi_id', 'Transaksi Id:') !!}
    {!! Form::number('transaksi_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Metode Pembayaran Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('metode_pembayaran_id', 'Metode Pembayaran Id:') !!}
    {!! Form::number('metode_pembayaran_id', null, ['class' => 'form-control', 'required']) !!}
</div>