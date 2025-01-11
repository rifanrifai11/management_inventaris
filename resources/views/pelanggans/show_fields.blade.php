<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $pelanggan->nama }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $pelanggan->alamat }}</p>
</div>

<!-- Kontak Field -->
<div class="col-sm-12">
    {!! Form::label('kontak', 'Kontak:') !!}
    <p>{{ $pelanggan->kontak }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $pelanggan->email }}</p>
</div>

<!-- Users Id Field -->
<div class="col-sm-12">
    {!! Form::label('users_id', 'Users Id:') !!}
    <p>{{ $pelanggan->users_id }}</p>
</div>

