<div>
    <section class="content-header">
        <div class="container-fluid">
            <h4 class="mb-3">Transaksi POS</h4>
            @include('flash::message')
            <div class="row mb-2">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            @foreach($groupBarang as $group)
                                <h5>{!! $group->name !!}</h5>
                                <div class="row">
                                    @foreach($group['barangs'] as $index => $barang)
                                        <div class="col-3">
                                            <a wire:click="addBarang('{{ $barang->id }}')" href="javascript:void(0)" class="card">
                                                <div class="card-header">
                                                    <h6><strong>{!! $barang->nama_barang !!}</strong></h6>
                                                    <p class="mb-0">Rp.{!! $barang->harga !!}</p>
                                                    <p class="mb-0" style="color: black">{!! $barang->stok !!} {!! $barang['satuan']->name !!}</p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3 pb-2 border-bottom"><strong>Daftar Transaksi</strong></h5>
                            <select class="form-control mb-2" wire:model="metodePembayaranId">
                                <option value="">--Pilih Pelanggan</option>
                                @foreach($listPelanggan as $pelanggan)
                                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                                @endforeach
                            </select>
                            <div class="mb-3 pb-2 border-bottom"></div>
                            @foreach($selectBarang as $index => $item)
                                <div class="border-bottom mb-2 pb-2">
                                    <div class="d-flex">
                                        <div class="col p-0">
                                            <h6 class="mb-0">{{ $item['name'] }}</h6>
                                            <small>Rp.{{ $item['harga'] }}</small> x {{ $item['qty'] }}
                                        </div>
                                        <div class="auto">
                                            Rp. {{ $item['total'] }}
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-danger mt-1 mb-1" wire:click="removeProduct({{ $item['id'] }})"><i class="fas fa-trash"></i></button>
                                </div>
                            @endforeach
                            <h6 class="pt-2">Total: Rp.{{ $totalPrice }}</h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3 pb-2 border-bottom"><strong>Pembayaran</strong></h5>
                            <select class="form-control mb-2" wire:model="metodePembayaranId">
                                <option value="">--Pilih Pembayaran</option>
                                @foreach($listMetoPembayaran as $metode)
                                    <option value="{{ $metode->id }}">{{ $metode->nama }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-success btn-block" wire:click="saveTransaksi">Bayar Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
