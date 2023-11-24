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

<body id="bg">

    @include('sweetalert::alert')
    <!-- Preloading  -->
    <div id="loading-area" class="loading-page-1">
        <div class="loader"></div>
    </div>

    <div class="page-wraper">

        @include('frontend.template.partials.header')

        <div class="page-content">

            @yield('content')
        </div>

        @include('frontend.template.partials.footer')

        <button class="scroltop icon-up" type="button">
            <i class="fas fa-arrow-up"></i>
        </button>

    </div>

    @include('frontend.template.partials.script')
    @stack('script')

</body>

</html>