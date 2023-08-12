@extends('errors.template.app')

@section('title', '504 - Gateway Timeout')

@section('content')
<div class="card-body">
    <h1 class="">504</h1>
    <div class="soon-image-block">
        <img class="image-animated img-fluid" src="{{ asset('assets/backend/images/pages/img-maintenance-bg.svg') }}"
            alt="image">
        <img src="{{ asset('assets/backend/images/pages/img-soon-box.svg') }}" class="img-soon soon-box" alt="image">
        <img src="{{ asset('assets/backend/images/pages/img-soon-widget-secondary.svg') }}"
            class="img-soon soon-secondary" alt="image">
        <img src="{{ asset('assets/backend/images/pages/img-soon-widget-primary.svg') }}" class="img-soon soon-primary"
            alt="image">
    </div>
    <div class="text-center">
        <p class="mt-3 mb-4 text-center text-muted f-16">Server tidak menerima respons <br>tepat waktu dari server
            upstream. Silakan coba lagi atau hubungi administrator situs.</p>

        <a href="{{ route('home') }}" class="btn btn-primary mb-3">
            <i class="ti ti-home me-2"></i>Home
        </a>
    </div>
</div>
@endsection