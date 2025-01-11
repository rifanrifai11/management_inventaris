<!-- Tgl Masuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_masuk', 'Tgl Masuk:') !!}
    {!! Form::text('tgl_masuk', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Jabatan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_id', 'Jabatan Id:') !!}
    {!! Form::number('jabatan_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control', 'required']) !!}
</div>