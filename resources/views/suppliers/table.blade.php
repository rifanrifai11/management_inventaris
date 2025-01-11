<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="suppliers-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Kontak</th>
                <th>Alamat</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->kontak }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('suppliers.show', [$supplier->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('suppliers.edit', [$supplier->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $suppliers])
        </div>
    </div>
</div>
