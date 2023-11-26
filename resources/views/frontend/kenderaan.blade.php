@extends('frontend.template.app')

@section('title', 'Kenderaan')

@section('content')

<!-- Banner  -->
<div class="dz-bnr-inr dz-bnr-inr-sm text-center overlay-gradient-dark"
    style="background-image: url({{ asset('assets/images/banner_kenderaan.png') }});">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Data Kenderaan</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kenderaan</li>
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
        <div class="row">
            @foreach ($kenderaans as $kenderaan)

            <div class="col-xl-4 col-md-6 m-b30">
                <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="0.1s">
                    <div class="dz-info">
                        <div class="dz-meta">
                            <a href="{{ route('detail.kendearan', $kenderaan->id) }}"><img
                                    src="{{ asset('assets/images/kenderaan_pengangkut.png') }}" alt=""></a>
                        </div>
                        <h5 class="dz-title"><a href="{{ route('detail.kendearan', $kenderaan->id) }}">{{
                                $kenderaan->nama_kenderaan.' -
                                '.$kenderaan->nomor_polisi }}</a></h5>
                        <p>Kenderaan ini adalah jenis kenderaan <b>{{ $kenderaan->jenis->jenis_kenderaan }}</b> yang
                            memiliki
                            sopir <b>{{ $kenderaan->sopir->user->biodata->nama_lengkap }}</b> dengan jalur yang di lalui
                            sebanyak {{
                            $kenderaan->jalurs->unique('lokasi_id')->count() }} lokasi. Untuk jelasnya cek detail
                            kenderaan</p>
                        <a class="btn btn-primary "
                            href="{{ route('detail.kendearan', $kenderaan->id) }}">Detail<span><i
                                    class="fa-solid fa-circle-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 m-b30 m-t30 m-lg-t10">

                <nav aria-label="Blog Pagination">
                    <div class="pagination style-1 text-center wow fadeInUp" data-wow-delay="0.4s">
                        {{ $kenderaans->links() }}
                    </div>
                </nav>
            </div>
        </div>

    </div>
</section>

@endsection