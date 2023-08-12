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
    @include('errors.template.partials.style')
    @stack('style')

</head>

<body>

    <div class="maintenance-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card soon-card">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('errors.template.partials.script')
    @stack('script')

</body>

</html>