@extends('frontend.template.app')

@section('title', 'Home - Template')

@section('content')
<header id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-xl-4">
                <h1 class="mt-sm-3 mb-sm-4 f-w-600 wow fadeInUp" data-wow-delay="0.2s">Build Your Next Project
                    With<span class="text-primary">Template</span></h1>
                <h4 class="mb-sm-4 text-muted wow fadeInUp" data-wow-delay="0.4s">Template ini membantu anda dalam
                    pengembangan aplikasi</h4>
                <div class="mb-4 mb-lg-0 d-inline-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-l bg-light-secondary text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block"
                                viewbox="0 0 118 94" role="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0 text-start"><b>Dibangun dengan Bootstrap</b> © - Framework CSS yang paling
                            populer.</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-image ">
                    <img src="{{ asset('assets/backend/images/landing/img-home-bg.png') }}" alt="image"
                        class="img-fluid img-bg wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-widget-1"><img src="{{ asset('assets/backend/images/landing/img-home-1.png') }}"
                            alt="image" class="img-fluid wow fadeInDown" data-wow-delay="0.6s"></div>
                    <div class="img-widget-2"><img src="{{ asset('assets/backend/images/landing/img-home-2.png') }}"
                            alt="image" class="img-fluid wow fadeInDown" data-wow-delay="0.7s"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container title">
        <div class="row">
            <div class="col-md-10 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="text-primary mb-0">Demos</h5>
                <h2 class="my-3">Pre-build Dashboard & Apps</h2>
                <p class="mb-0">Berry has customized pages with Material-UI components, Apps, Forms and lots more to
                    explore.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-6 col-md-4">
                <a href="landing.html#">
                    <img src="{{ asset('assets/backend/images/landing/img-demo-1.jpg') }}" alt="img"
                        class="rounded img-fluid mb-3 wow fadeInUp" data-wow-delay="0.2s">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a href="landing.html#">
                    <img src="{{ asset('assets/backend/images/landing/img-demo-2.jpg') }}" alt="img"
                        class="rounded img-fluid mb-3 wow fadeInUp" data-wow-delay="0.4s">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a href="landing.html#">
                    <img src="{{ asset('assets/backend/images/landing/img-demo-3.jpg') }}" alt="img"
                        class="rounded img-fluid mb-3 wow fadeInUp" data-wow-delay="0.4s">
                </a>
            </div>
            <div class="col-12 mt-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                <button class="btn btn-outline-primary">Explore Components</button>
            </div>
        </div>
    </div>
</section>

<section class="layout">
    <div class="container">
        <div class="row align-items-center layout-block wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-6">
                <div class="layout-img-block">
                    <img src="{{ asset('assets/backend/images/landing/img-layout1.png') }}" alt="image"
                        class="img-fluid img-layout">
                    <img src="{{ asset('assets/backend/images/landing/img-layout1-bg.png') }}" alt="image"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-6">
                <div class="layout-content">
                    <h4><b>Dark Layout</b></h4>
                    <p class="text-muted">Modern, sleek and elegant dark color scheme that looks great in a dark
                        variant.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center layout-block wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-6">
                <div class="layout-content">
                    <h4><b>RTL</b></h4>
                    <p class="text-muted">Fully Support Right-to-left (RTL) design variant.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="layout-img-block">
                    <img src="{{ asset('assets/backend/images/landing/img-layout2.png') }}" alt="image"
                        class="img-fluid img-layout">
                    <img src="{{ asset('assets/backend/images/landing/img-layout2-bg.png') }}" alt="image"
                        class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row align-items-center layout-block wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-6">
                <div class="layout-img-block">
                    <img src="{{ asset('assets/backend/images/landing/img-layout3.png') }}" alt="image"
                        class="img-fluid img-layout">
                    <img src="{{ asset('assets/backend/images/landing/img-layout3-bg.png') }}" alt="image"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-6">
                <div class="layout-content">
                    <h4><b>Dark Layout</b></h4>
                    <p class="text-muted">Support Multi-language. Added 4 pre-filled language.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subscribe">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-end my-1">
                <img src="{{ asset('assets/backend/images/landing/img-groupmail.png') }}" alt="logo"
                    class="img-fluid img-mail">
            </div>
            <div class="col-lg-7 my-1">
                <div class="subscribe-block wow zoomIn" data-wow-delay="0.6s">
                    <h2 class="mb-0">Subscribe</h2>
                    <p class="my-3 my-mb-4">Subscribe for the latest news & updates of Berry admin template. We
                        never send spam
                        newsletters.</p>
                    <div class="media align-items-center">
                        <div class="media-body me-3">
                            <div class="form-floating mb-0">
                                <input type="email" class="form-control" id="floatingaddcomment"
                                    placeholder="Email Address">
                                <label for="floatingaddcomment">Email Address</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection