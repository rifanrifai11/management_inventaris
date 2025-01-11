<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
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

<!-- Pelanggan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pelanggan_id', 'Pelanggan Id:') !!}
    {!! Form::number('pelanggan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control', 'required']) !!}
</div>