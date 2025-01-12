<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="kategori-barangs-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Deskripsi</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kategoriBarangs as $kategoriBarang)
                <tr>
                    <td>{{ $kategoriBarang->name }}</td>
                    <td>{{ $kategoriBarang->deskripsi }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['kategoriBarangs.destroy', $kategoriBarang->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('kategoriBarangs.show', [$kategoriBarang->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('kategoriBarangs.edit', [$kategoriBarang->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $kategoriBarangs])
        </div>
    </div>
</div>
