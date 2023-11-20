<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="mm-{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route($user->role->level) }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>

            {{-- TABEL MASTER --}}
            <li>
                <a class="mt-3">Master Data</a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('desa.index') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Desa</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('jenis-kenderaan.index') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Jenis Kenderaan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Kategori</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Tarif</span>
                </a>
            </li>

            {{-- TABEL TRANSAKSI --}}
            <li>
                <a class="mt-3">Transaksi</a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text"> Pengelola</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Lokasi</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Kenderaan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Sopir</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Jalur</span>
                </a>
            </li>

            {{-- LAPORAN --}}
            <li>
                <a class="mt-3">Laporan</a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Data User</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Data Sampah</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Data Pembayaran</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('login') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Data Capaian</span>
                </a>
            </li>

        </ul>
    </div>
</div>