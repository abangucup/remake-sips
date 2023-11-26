@extends('frontend.template.app')

@section('title', 'Desa '. $desa->nama_desa)

@section('content')

<!-- Banner  -->
<div class="dz-bnr-inr dz-bnr-inr-sm text-center overlay-gradient-dark"
    style="background-image: url({{ asset('assets/images/desa.png') }});">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Detail Desa {{ $desa->nama_desa }}</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.desa') }}">Desa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $desa->nama_desa }}</li>
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
                            <img src="{{ asset('assets/images/desa.png') }}" class="rounded" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="shop-detail.html#graphic-design-1"
                                        class="active">Detail Desa</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="graphic-design-1" class="tab-pane show active">
                                    <table class="table border shop-overview">
                                        <tr>
                                            <th>Nama Desa</th>
                                            <td>{{ $desa->nama_desa }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pengelola</th>
                                            <td>
                                                <ul>
                                                    @foreach ($desa->pengelolas as $pengelola)
                                                    <li>{{ $loop->iteration.'. '.
                                                        $pengelola->user->biodata->nama_lengkap
                                                        }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th>Jumlah Lokasi</th>
                                            <td>{{ $desa->lokasis->count() }} Lokasi</td>
                                        </tr>
                                        <tr>
                                            <th>Masyarakat Aktif</th>
                                            <td>{{ $desa->pelanggans->count() }} Orang</td>
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
            Lokasi lingkungan Desa {{ $desa->nama_desa }}
        </h2>
        <div class="row">
            @foreach ($lokasis as $lokasi)
            <div class="col-xl-4 col-md-6 m-b30">
                <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="0.1s">
                    <div class="dz-info">
                        <div class="dz-meta">
                            <a href="#"><img src="{{ asset('assets/images/lokasi_sampah.png') }}" alt=""></a>
                        </div>
                        <h5 class="dz-title text-center"><a href="#">{{ $lokasi->nama_lokasi }}</a>
                        </h5>
                        <p></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 m-b30 m-t30 m-lg-t10">

                <nav aria-label="Blog Pagination">
                    <div class="pagination style-1 text-center wow fadeInUp" data-wow-delay="0.4s">
                        {{ $lokasis->links() }}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection