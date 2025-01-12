@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-100 pt-4"><strong>Selamat Datang</strong></h1>
        <h5 class="text-black-70">Sistem Managemen Inventaris Penjualan</h5>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Barang</h5>
                        <h3>{{ \App\Models\Barang::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Transaksi</h5>
                        <h3>{{ \App\Models\Transaksi::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Member</h5>
                        <h3>{{ \App\Models\Pelanggan::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Pegawai</h5>
                        <h3>{{ \App\Models\Pegawai::count() }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
