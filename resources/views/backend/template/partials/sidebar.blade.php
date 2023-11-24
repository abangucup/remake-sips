<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="mm-{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route($user->role->level) }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>

            @if ($user->role->level == 'admin')
            {{-- TABEL MASTER --}}
            <li>
                <a class="mt-3">Master Data</a>
            </li>
            <li class="mm-{{ Request::is('akun') ? 'active' : '' }}">
                <a class="" href="{{ route('desa.index') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">Desa</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('jenis-kenderaan') ? 'active' : '' }}">
                <a class="" href="{{ route('jenis-kenderaan.index') }}">
                    <i class="fa fa-sliders-h"></i>
                    <span class="nav-text">Jenis Kenderaan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('kategori') ? 'active' : '' }}">
                <a class="" href="{{ route('kategori.index') }}">
                    <i class="fa fa-list"></i>
                    <span class="nav-text">Kategori</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('tarif') ? 'active' : '' }}">
                <a class="" href="{{ route('tarif.index') }}">
                    <i class="fa fa-dollar-sign"></i>
                    <span class="nav-text">Tarif</span>
                </a>
            </li>

            {{-- TABEL TRANSAKSI --}}
            <li>
                <a class="mt-3">Transaksi</a>
            </li>
            <li class="mm-{{ Request::is('pengelola') ? 'active' : '' }}">
                <a class="" href="{{ route('pengelola.index') }}">
                    <i class="fa fa-users-cog"></i>
                    <span class="nav-text"> Pengelola</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('lokasi') ? 'active' : '' }}">
                <a class="" href="{{ route('lokasi.index') }}">
                    <i class="fa fa-map-marked-alt"></i>
                    <span class="nav-text">Lokasi</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('kenderaan') ? 'active' : '' }}">
                <a class="" href="{{ route('kenderaan.index') }}">
                    <i class="fa fa-car-side"></i>
                    <span class="nav-text">Kenderaan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('sopir') ? 'active' : '' }}">
                <a class="" href="{{ route('sopir.index') }}">
                    <i class="fa fa-id-card-alt"></i>
                    <span class="nav-text">Sopir</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('jalur') ? 'active' : '' }}">
                <a class="" href="{{ route('jalur.index') }}">
                    <i class="fa fa-map-signs"></i>
                    <span class="nav-text">Jalur</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('sampah') ? 'active' : '' }}">
                <a class="" href="{{ route('sampah.index') }}">
                    <i class="fa fa-trash-alt"></i>
                    <span class="nav-text">Sampah</span>
                </a>
            </li>

            {{-- LAPORAN --}}
            <li>
                <a class="mt-3">Laporan</a>
            </li>
            <li class="mm-{{ Request::is('laporan/user') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.user') }}">
                    <i class="fa fa-user-shield"></i>
                    <span class="nav-text">Data User</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('laporan/jalur') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.jalur') }}">
                    <i class="fa fa-random"></i>
                    <span class="nav-text">Jalur Pengangkutan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('laporan/pembayaran') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.pembayaran') }}">
                    <i class="fa fa-money-bill-wave"></i>
                    <span class="nav-text">Pembayaran</span>
                </a>
            </li>

            @elseif ($user->role->level == 'pengelola')
            <li class="mm-{{ Request::is('pelanggan') ? 'active' : '' }}">
                <a class="" href="{{ route('pelanggan.index') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">Data Masyarakat</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('jenis-kenderaan') ? 'active' : '' }}">
                <a class="" href="{{ route('jenis-kenderaan.index') }}">
                    <i class="fa fa-sliders-h"></i>
                    <span class="nav-text">Data Pembayaran</span>
                </a>
            </li>
            {{-- LAPORAN --}}
            <li>
                <a class="mt-3">Laporan</a>
            </li>
            <li class="mm-{{ Request::is('laporan/jalur') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.jalur') }}">
                    <i class="fa fa-trash-alt"></i>
                    <span class="nav-text">Jalur Pengangkutan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('laporan/jalur') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.jalur') }}">
                    <i class="fa fa-trash-alt"></i>
                    <span class="nav-text">Sampah</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('laporan/pembayaran') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.pembayaran') }}">
                    <i class="fa fa-money-bill-wave"></i>
                    <span class="nav-text">Pembayaran</span>
                </a>
            </li>

            @elseif ($user->role->level == 'sopir')
            <li class="mm-{{ Request::is('timbangan') ? 'active' : '' }}">
                <a class="" href="{{ route('timbangan.index') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">Data Timbangan</span>
                </a>
            </li>
            {{-- LAPORAN --}}
            <li>
                <a class="mt-3">Laporan</a>
            </li>
            <li class="mm-{{ Request::is('laporan/jalur') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.jalur') }}">
                    <i class="fa fa-trash-alt"></i>
                    <span class="nav-text">Jalur Pengangkutan</span>
                </a>
            </li>

            @elseif ($user->role->level == 'pelanggan')
            <li class="mm-{{ Request::is('jenis-kenderaan') ? 'active' : '' }}">
                <a class="" href="{{ route('jenis-kenderaan.index') }}">
                    <i class="fa fa-sliders-h"></i>
                    <span class="nav-text">Data Pembayaran</span>
                </a>
            </li>
            {{-- LAPORAN --}}
            <li>
                <a class="mt-3">Laporan</a>
            </li>
            <li class="mm-{{ Request::is('laporan/jalur') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.jalur') }}">
                    <i class="fa fa-trash-alt"></i>
                    <span class="nav-text">Jalur Pengangkutan</span>
                </a>
            </li>
            <li class="mm-{{ Request::is('laporan/pembayaran') ? 'active' : '' }}">
                <a class="" href="{{ route('laporan.pembayaran') }}">
                    <i class="fa fa-money-bill-wave"></i>
                    <span class="nav-text">Pembayaran</span>
                </a>
            </li>
            @endif

        </ul>
    </div>
</div>