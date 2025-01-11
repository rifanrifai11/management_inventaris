<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Permissions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('jabatans.index') }}" class="nav-link {{ Request::is('jabatans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Jabatans</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('metodePembayarans.index') }}" class="nav-link {{ Request::is('metodePembayarans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Metode Pembayarans</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pegawais.index') }}" class="nav-link {{ Request::is('pegawais*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pegawais</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pelanggans.index') }}" class="nav-link {{ Request::is('pelanggans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pelanggans</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Suppliers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('barangs.index') }}" class="nav-link {{ Request::is('barangs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Barangs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pembayarans.index') }}" class="nav-link {{ Request::is('pembayarans*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pembayarans</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transaksis.index') }}" class="nav-link {{ Request::is('transaksis*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Transaksis</p>
    </a>
</li>
