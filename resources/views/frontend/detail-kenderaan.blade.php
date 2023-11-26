@extends('frontend.template.app')

@section('title', 'Kenderaan '. $kenderaan->nomor_polisi)

@section('content')

<!-- Banner  -->
<div class="dz-bnr-inr dz-bnr-inr-sm text-center overlay-gradient-dark"
    style="background-image: url({{ asset('assets/images/banner_kenderaan.png') }});">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Detail {{ $kenderaan->nama_kenderaan . ' - '.$kenderaan->nomor_polisi }}</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.kenderaan') }}">Kenderaan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $kenderaan->nama_kenderaan. ' -
                        '.$kenderaan->nomor_polisi }}</li>
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
        <div class="row shop-grid-row style-4 m-b60">
            <div class="col">
                <div class="dz-box row align-items-center">
                    <div class="col-lg-5">
                        <div class="dz-media">
                            <img src="{{ asset('assets/images/kenderaan_pengangkut.png') }}" class="rounded"
                                alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="shop-detail.html#graphic-design-1"
                                        class="active">Detail Kenderaan</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="graphic-design-1" class="tab-pane show active">
                                    <table class="table border shop-overview">
                                        <tr>
                                            <th>Nama Kenderaan</th>
                                            <td>{{ $kenderaan->nama_kenderaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Polisi</th>
                                            <td>{{ $kenderaan->nomor_polisi }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sopir</th>
                                            <td>{{ $kenderaan->sopir->user->biodata->nama_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Lokasi</th>
                                            <td>{{ $kenderaan->lokasis->unique()->count() }} Lokasi</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="title wow fadeInUp" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            Jalur lokasi yang dilalui {{ $kenderaan->nama_kenderaan. ' - '.$kenderaan->nomor_polisi }}
        </h2>
        <div class="row">
            @foreach ($kenderaan->jalurs->groupBy('hari') as $hari => $jalurs)
            <div class="col-xl-4 col-md-6 m-b30">
                <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="0.1s">
                    <div class="dz-info">
                        <div class="dz-meta">
                            <a href="#"><img src="{{ asset('assets/images/lokasi_sampah.png') }}" alt=""></a>
                        </div>
                        <h5 class="dz-title text-center"><a href="#">Hari : {{ $hari }}</a>
                        </h5>
                        <span>Lokasi :
                            @foreach ($jalurs->groupBy('lokasi_id') as $lokasiId => $lokasiJalurs)
                            @foreach ($lokasiJalurs->pluck('lokasi.nama_lokasi') as $namaLokasi)
                            <ul>
                                <li>- {{ $namaLokasi }}</li>
                            </ul>
                            @endforeach
                            @endforeach
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection