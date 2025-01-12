<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dasboard</p>
    </a>
</li>

<li class="nav-header">TRANSAKSI</li>
<li class="nav-item">
    <a href="{{ route('pos') }}" class="nav-link {{ Request::is('pos') ? 'active' : '' }}">
        <i class="nav-icon fas fa-columns"></i>
        <p>POS</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('pelanggans.index') }}" class="nav-link {{ Request::is('pelanggans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Pelanggan</p>
    </a>
</li>

<li class="nav-header">LAPORAN</li>


<li class="nav-item">
    <a href="{{ route('transaksis.index') }}" class="nav-link {{ Request::is('transaksis*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list-alt"></i>
        <p>Transaksi</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pembayarans.index') }}" class="nav-link {{ Request::is('pembayarans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-credit-card"></i>
        <p>Pembayaran</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('barangs.index') }}" class="nav-link {{ Request::is('barangs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-box"></i>
        <p>Barang</p>
    </a>
</li>

<li class="nav-header">PENGATURAN</li>
<li class="nav-item">
    <a href="{{ route('pegawais.index') }}" class="nav-link {{ Request::is('pegawais*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Pegawai</p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th-large"></i>
        <p>Master Data<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
                <p>Supplier</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('jabatans.index') }}" class="nav-link {{ Request::is('jabatans*') ? 'active' : '' }}">
                <p>Jabatan</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('metodePembayarans.index') }}" class="nav-link {{ Request::is('metodePembayarans*') ? 'active' : '' }}">
                <p>Metode Pembayaran</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('satuans.index') }}" class="nav-link {{ Request::is('satuans*') ? 'active' : '' }}">
                <p>Satuans</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('kategoriBarangs.index') }}" class="nav-link {{ Request::is('kategoriBarangs*') ? 'active' : '' }}">
                <p>Kategori Barangs</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-wrench"></i>
        <p>Pengguna & Akses<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <p>Role</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <p>Pengguna</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <p>Permission</p>
            </a>
        </li>
    </ul>
</li>
