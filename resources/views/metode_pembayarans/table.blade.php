<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="metode-pembayarans-table">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Keterangan</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($metodePembayarans as $metodePembayaran)
                <tr>
                    <td>{{ $metodePembayaran->nama }}</td>
                    <td>{{ $metodePembayaran->keterangan }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['metodePembayarans.destroy', $metodePembayaran->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('metodePembayarans.show', [$metodePembayaran->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('metodePembayarans.edit', [$metodePembayaran->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $metodePembayarans])
        </div>
    </div>
</div>
