<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="jabatans-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Deskripsi</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jabatans as $jabatan)
                <tr>
                    <td>{{ $jabatan->name }}</td>
                    <td>{{ $jabatan->deskripsi }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['jabatans.destroy', $jabatan->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('jabatans.show', [$jabatan->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('jabatans.edit', [$jabatan->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $jabatans])
        </div>
    </div>
</div>
