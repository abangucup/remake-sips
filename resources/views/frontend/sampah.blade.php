@extends('frontend.template.app')

@section('title', 'Sampah')

@section('content')

<!-- Banner  -->
<div class="dz-bnr-inr dz-bnr-inr-sm text-center overlay-gradient-dark"
    style="background-image: url({{ asset('assets/images/sampah_1.png') }});">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Sampah</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Sampah</a>
                    </li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Blog Grid Starts -->
<section class="content-inner position-relative">
    <div class="container">

        <div class="row section-head align-items-center">
            <div class="text-center text-xl-start col-xl-7 m-lg-b20">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Chart Sampah perharinya</h2>
            </div>
        </div>
        <div class="row d-flext justify-content-center">
            <div class="col-xl-12 col-sm-6">
                <div class="product-bx wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-content">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row section-head align-items-center">
            <div class="text-center text-xl-start col-xl-7 m-lg-b20">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Data sampah perkategori</h2>
            </div>
        </div>
        <div class="row d-flext justify-content-center">
            @foreach ($kategoris as $kategori)
            <div class="col-xl-4 col-sm-6">
                <div class="product-bx wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-media">
                        <img src="{{ asset('assets/images/gambar_sampah.png') }}" alt="image">
                    </div>
                    <div class="product-content">
                        <h5 class="title "><a href="#">{{ $kategori->kategori_sampah }}</a></h5>
                        <span>{{ $kategori->sampahs->sum('jumlah_sampah')}} Kg</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
@push('script')
<script src="{{ $chart->cdn() }}"></script>
{!! $chart->script() !!}
@endpush