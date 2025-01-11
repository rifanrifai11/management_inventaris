<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pelanggans-table">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Email</th>
                <th>Users Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->kontak }}</td>
                    <td>{{ $pelanggan->email }}</td>
                    <td>{{ $pelanggan->users_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['pelanggans.destroy', $pelanggan->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('pelanggans.show', [$pelanggan->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('pelanggans.edit', [$pelanggan->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $pelanggans])
        </div>
    </div>
</div>
