<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="transaksis-table">
            <thead>
            <tr>
                <th>No.</th>
                <th>Total Transaksi</th>
                <th>Date Transaction</th>
                <th>Barang</th>
                <th>Pelanggan</th>
                <th>Petugas Kasir</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transaksis as $index=>$transaksi)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $transaksi->total }}</td>
                    <td>{{ $transaksi->date_transaction->format('d-m-Y') }}</td>
                    <td>
                        <ul>
                            @foreach($transaksi['barangHasTransaksis'] as $barang)
                                <li>
                                    <h6 class="mb-0"><strong>{{ $barang['barang']->nama_barang }}</strong></h6>
                                    <p>Qty : {{ $barang->qty }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $transaksi['pelanggan'] ?? '-' }}</td>
                    <td>{{ $transaksi['users']['pegawai']->nama_lengkap }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['transaksis.destroy', $transaksi->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('transaksis.show', [$transaksi->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('transaksis.edit', [$transaksi->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $transaksis])
        </div>
    </div>
</div>
