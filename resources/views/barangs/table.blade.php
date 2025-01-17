<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="barangs-table">
            <thead>
            <tr>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Expired</th>
                <th>Supplier</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($barangs as $index=>$barang)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $barang->kode_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>Rp.{{ number_format($barang->harga , 0, ',', '.') }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->expired }}</td>
                    <td>{{ $barang['supplier']->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('barangs.show', [$barang->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('barangs.edit', [$barang->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $barangs])
        </div>
    </div>
</div>
