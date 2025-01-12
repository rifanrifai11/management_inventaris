<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="barang-has-transaksis-table">
            <thead>
            <tr>
                <th>Qty</th>
                <th>Barang Id</th>
                <th>Transaksi Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($barangHasTransaksis as $barangHasTransaksi)
                <tr>
                    <td>{{ $barangHasTransaksi->qty }}</td>
                    <td>{{ $barangHasTransaksi->barang_id }}</td>
                    <td>{{ $barangHasTransaksi->transaksi_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['barangHasTransaksis.destroy', $barangHasTransaksi->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('barangHasTransaksis.show', [$barangHasTransaksi->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('barangHasTransaksis.edit', [$barangHasTransaksi->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $barangHasTransaksis])
        </div>
    </div>
</div>
