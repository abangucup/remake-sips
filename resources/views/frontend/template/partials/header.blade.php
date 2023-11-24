<header class="site-header mo-left header {{ Request::is('/') ? 'header-transparent' : ''}}">
  <!-- Main Header -->
  <div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar clearfix ">
      <div class="container clearfix">

        <!-- Website Logo -->
        <div class="logo-header logo-dark">
          <a href="index.html"><img src="{{ asset('assets/images/truk.png') }}" alt=""></a>
        </div>

        <!-- Nav Toggle Button -->
        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <!-- Extra Nav -->
        @auth
        <div class="extra-nav">
          <div class="extra-cell">
            <a class="btn btn-primary btn-lg" href="{{ route($user->role->level) }}">Dashboard</a>
          </div>
        </div>
        @endauth
        @guest
        <div class="extra-nav">
          <div class="extra-cell">
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login</a>
          </div>
        </div>
        @endguest

        <!-- Header Nav -->
        <div class="header-nav navbar-collapse collapse " id="navbarNavDropdown">
          <div class="logo-header logo-dark">
            <a href="index.html"><img src="{{ asset('assets/images/truk.png') }}" alt="" class="w-50"></a>
          </div>
          <ul class="nav navbar-nav navbar navbar-left">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('list.desa') }}">Desa</a></li>
            <li><a href="{{ route('jenis.kenderaan') }}">Kenderaan</a></li>
            <li><a href="{{ route('jalur.kenderaan') }}">Jalur Pelayanan</a></li>
            <li><a href="{{ route('capaian.sampah') }}">Sampah</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Header End -->
</header>
<!-- Header End -->