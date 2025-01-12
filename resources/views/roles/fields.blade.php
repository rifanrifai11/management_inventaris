<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Guard Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    {!! Form::text('guard_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    @foreach($permissions as $item)
        <div class="form-check">
            <label class="form-check-label">
                {!! Form::checkbox('permission_id[]', $item->id, in_array($item->id, $sPermissions)?true:false,['id'=>'input-'.$item->id]) !!}
                {{ $item->name }}
            </label>
        </div>
    @endforeach
</div>
