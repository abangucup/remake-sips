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
    @include('backend.template.partials.style')
    @stack('style')

</head>


<body>

    @include('sweetalert::alert')

    {{-- Loader --}}
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <!--**********************************
              Nav header start
          ***********************************-->
        @include('backend.template.partials.navbar')
        <!--**********************************
              Nav header end
          ***********************************-->

        <!--**********************************
              Header start
          ***********************************-->
        @include('backend.template.partials.header')
        <!--**********************************
              Header end ti-comment-alt
          ***********************************-->

        <!--**********************************
              Sidebar start
          ***********************************-->
        @include('backend.template.partials.sidebar')
        <!--**********************************
              Sidebar end
          ***********************************-->

        <!--**********************************
              Content body start
          ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                @yield('content')
            </div>
        </div>
        <!--**********************************
              Content body end
          ***********************************-->

        <!--**********************************
              Footer start
          ***********************************-->
        @include('backend.template.partials.footer')
        <!--**********************************
              Footer end
          ***********************************-->

        <!--**********************************
             Support ticket button start
          ***********************************-->

        <!--**********************************
             Support ticket button end
          ***********************************-->
    </div>

    @include('backend.template.partials.script')

    @stack('script')
</body>

</html>