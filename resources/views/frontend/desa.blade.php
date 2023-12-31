@extends('frontend.template.app')

@section('title', 'Desa')

@section('content')

<!-- Banner  -->
<div class="dz-bnr-inr dz-bnr-inr-sm text-center overlay-gradient-dark"
    style="background-image: url({{ asset('assets/images/desa.png') }});">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Data Desa</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Desa</li>
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
            @foreach ($desas as $desa)

            <div class="col-xl-4 col-md-6 m-b30">
                <div class="dz-card style-1 overlay-shine wow fadeInUp" data-wow-delay="0.1s">
                    <div class="dz-info">
                        <div class="dz-meta">
                            <a href="{{ route('detail.desa', $desa->id) }}"><img
                                    src="{{ asset('assets/images/desa.png') }}" alt=""></a>
                        </div>
                        <h5 class="dz-title"><a href="{{ route('detail.desa', $desa->id) }}">{{ $desa->nama_desa }}</a>
                        </h5>
                        <p>Desa {{ $desa->nama_desa }} merupakan salah satu desa yang ada di marisa. desa ini memiliki
                            {{ $desa->lokasis->count() }} Lokasi dengan jumlah masyarakat yang aktif membayar sekitar {{
                            $desa->pelanggans->count() }} Orang. desa ini juga memiliki {{ $desa->pengelolas->count() }}
                            Pengelola / Operator. Untuk jelasnya cek detail desa</p>
                        <a class="btn btn-primary " href="{{ route('detail.desa', $desa->id) }}">Detail<span><i
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
                        {{ $desas->links() }}
                    </div>
                </nav>
            </div>
        </div>

    </div>
</section>

@endsection