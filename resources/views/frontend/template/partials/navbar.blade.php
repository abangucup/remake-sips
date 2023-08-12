<nav class="navbar navbar-expand-md navbar-light default">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/frontend/images/png/logo_p2pl.png') }}" class="logo" alt="logo">
        </a>
        <span class="h2 f-w-900 mx-3">P2PL Dinkes Kota</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto mb-2 my-lg-0 my-3">
                <li class="nav-item mx-lg-4 mb-lg-0 mb-2 h4">
                    <a class="nav-link text-dark" href="{{ route('home') }}"><i class="ti ti-home mx-2"></i>Home</a>
                </li>
            </ul>
            <a class="btn btn-primary" target="_blank" href="{{ route('login') }}"><i
                    class="ti ti-login mx-2"></i>Login</a>
        </div>
    </div>
</nav>