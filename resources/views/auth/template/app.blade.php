<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Reuse Template.">
    <meta name="keywords" content="Template, Bootstrap 5">
    <meta name="author" content="SalmanMustapa">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- Styles css --}}
    @include('auth.template.partials.style')
    @stack('style')

</head>

<body>

    @include('sweetalert::alert')

    <div class="auth-wrapper auth-v3">
        <div class="auth-content">
            <div class="card">
                <div class="row align-items-stretch text-center">
                    @yield('content')

                    <div class="col-md-6 img-card-side bg-custom">
                        <div class="card-body img">
                            <img src="{{ asset('assets/frontend/images/png/logo_p2pl.png') }}" alt="" class="w-50">
                            <footer class="text-center">
                                <p>
                                    <a href="https://www.facebook.com/profile.php?id=100090648413031"
                                        class="text-white mx-3 f-w-600"><i data-feather="facebook"
                                            class="mx-3"></i>Pengendalian
                                        Penyakit dan Penyehatan Lingkungan</a>
                                </p>
                                <p>
                                    <a href="https://www.facebook.com/p2plkota" class="text-white f-w-600"><i
                                            data-feather="instagram" class="mx-3"></i>@p2plkota</a>
                                </p>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('auth.template.partials.script')
    @stack('script')

</body>

</html>