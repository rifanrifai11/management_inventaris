<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pembayarans-table">
            <thead>
            <tr>
                <th>Total</th>
                <th>Date Transaction</th>
                <th>Transaksi ID</th>
                <th>Metode Pembayaran</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pembayarans as $pembayaran)
                <tr>
                    <td>Rp.{{ number_format($pembayaran->total, 0, ',', '.') }}</td>
                    <td>{{ $pembayaran->date_transaction }}</td>
                    <td>{{ $pembayaran->transaksi_id }}</td>
                    <td>{{ $pembayaran['metodePembayaran']->nama }}</td>
                    <td  style="width: 120px">
{{--                        {!! Form::open(['route' => ['pembayarans.destroy', $pembayaran->id], 'method' => 'delete']) !!}--}}
                        <div class='btn-group'>
                            <a href="{{ route('pembayarans.show', [$pembayaran->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
{{--                            <a href="{{ route('pembayarans.edit', [$pembayaran->id]) }}"--}}
{{--                               class='btn btn-default btn-xs'>--}}
{{--                                <i class="far fa-edit"></i>--}}
{{--                            </a>--}}
{{--                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                        </div>
{{--                        {!! Form::close() !!}--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $pembayarans])
        </div>
    </div>
</div>
