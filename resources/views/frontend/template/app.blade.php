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
    @include('frontend.template.partials.style')
    @stack('style')

</head>

<body class="landing-page">

    @include('sweetalert::alert')

    @include('frontend.template.partials.navbar')


    @yield('content')


    @include('frontend.template.partials.footer')

    @include('frontend.template.partials.script')

</body>

</html>