<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
</div>

<!-- Kontak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kontak', 'Kontak:') !!}
    {!! Form::text('kontak', null, ['class' => 'form-control', 'maxlength' => 45]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('s_role_id', 'Hak Akses:') !!}
    @foreach($sRoles as $item)
        <fieldset>
            {!! Form::checkbox('s_role_id[]', $item->id, in_array($item->id, $roles)?true:false,['id'=>'input-'.$item->id]) !!}
            <label for="input-{{$item->id}}" class="">{!! $item->name !!}</label>
        </fieldset>
    @endforeach
</div>
