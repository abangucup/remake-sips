<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

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

<body class="h-100">

    @include('sweetalert::alert')

    <div class="authincation front-end h-100">
        <div class="container h-100">
            @yield('content')

        </div>
    </div>

    @include('auth.template.partials.script')
    @stack('script')

</body>

</html>