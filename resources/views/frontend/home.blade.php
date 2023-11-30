@extends('frontend.template.app')

@section('title', 'Home - Template')

@section('content')
<div class="main-slider style-1 position-relative">
    <div class="pagination">
        <div class="main-swiper1-pagination"></div>
    </div>
    <div class="main-swiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-rel="1">
                <div class="main-bnr">
                    <div class="container">
                        <div class="row bnr-row">
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-7">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay="0.1s" data-swiper-parallax="-50">#
                                    Sistem Infromasi Pengelolaan Sampah (SIPS)</h6>
                                <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-swiper-parallax="-50">
                                    Solusi digital untuk masyarakat dalam mengelola sampah</h1>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-5">
                                <div class="main-media">
                                    <img class="media" src="{{ asset('assets/images/bank_sampah.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-thumb-wrapper">
            <ul class="main-swiper-pagination">
                <li data-member="1"><a href="javascript:void(0);"><img src="{{ asset('assets/images/sampah.png') }}"
                            alt=""></a></li>
                <li data-member="2"><a href="javascript:void(0);"><img src="{{ asset('assets/images/tong.png') }}"
                            alt=""></a></li>
                <li data-member="3"><a href="javascript:void(0);"><img src="{{ asset('assets/images/sampah_1.png') }}"
                            alt=""></a></li>
                <li data-member="4"><a href="javascript:void(0);"><img src="{{ asset('assets/images/truk.png') }}"
                            alt=""></a></li>
                <li data-member="5"><a href="javascript:void(0);"><img
                            src="{{ asset('assets/images/icon-bank-sampah_2.png') }}" alt=""></a></li>
            </ul>
            <img src="assets/images/home-banner/line.png" class="line" alt="">
        </div>
    </div>
</div>
<!--Swiper Banner End-->

<section class="content-inner-1">
    <div class="container">
        <div class="section-head text-center">
            <p class="text wow fadeInUp" data-wow-delay="0.1s">Yang kami layani</p>
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Pengelolaan Sampah Untuk Masyarakat</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="icon-bx-wraper style-1 box-hover text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-media">
                        <img src="{{ asset('assets/images/pic1.png') }}" alt="image">
                    </div>
                    <div class="icon-content">
                        <h5 class="title">Muda Diakses</h5>
                        <p class="text">Website mudah dikases darimana saja dan kapan saja</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="icon-bx-wraper style-1 box-hover  active text-center wow fadeInUp center"
                    data-wow-delay="0.2s">
                    <div class="icon-media">
                        <img src="{{ asset('assets/images/pic2.png') }}" alt="image">
                    </div>
                    <div class="icon-content">
                        <h5 class="title">Cepat</h5>
                        <p class="text">Melakukan pelayanan pengakutan dengan cepat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-b30">
                <div class="icon-bx-wraper style-1 box-hover  text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-media">
                        <img src="{{ asset('assets/images/pic3.png') }}" alt="image">
                    </div>
                    <div class="icon-content">
                        <h5 class="title">Kenyamanan</h5>
                        <p class="text">Memberikan kenyamanan lingkungan anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-wrapper1 content-inner-1">
    <div class="container">
        <div class="row section-head align-items-center">
            <div class="text-center text-xl-start col-xl-7 m-lg-b20">
                <p class="text wow fadeInUp" data-wow-delay="0.1s">Kategori Sampah</p>
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Data sampah berdasarkan dengan kategori sampah</h2>
            </div>
            <div class="text-center text-xl-end col-xl-5">
                <a class="btn btn-light btn-lg wow fadeInUp" data-wow-delay="0.3s"
                    href="{{ route('capaian.sampah') }}">Lihat Capaian Sampah <i
                        class="fa-solid fa-circle-arrow-right"></i></a>
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

<section class="product-wrapper1 content-inner-1">
    <div class="container">
        <div class="row section-head align-items-center">
            <div class="text-center text-xl-start col-xl-7 m-lg-b20">
                <p class="text wow fadeInUp" data-wow-delay="0.1s">Jenis Kenderaan</p>
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Beberapa kenderaan yang kami miliki</h2>
            </div>
            <div class="text-center text-xl-end col-xl-5">
                <a class="btn btn-light btn-lg wow fadeInUp" data-wow-delay="0.3s"
                    href="{{ route('list.kenderaan') }}">Lihat Kenderaan <i
                        class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        <div class="row d-flext justify-content-center">
            @foreach ($jenisKenderaan as $jenis)
            <div class="col-xl-4 col-sm-6">
                <div class="product-bx wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-media">
                        <img src="{{ asset('assets/images/truk.png') }}" alt="image">
                    </div>
                    <div class="product-content">
                        <h5 class="title "><a href="#">{{ $jenis->jenis_kenderaan }}</a></h5>
                        <span>{{ $jenis->kenderaans->count() }} Unit</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="content-inner overflow-hidden">
    <div class="container">
        <div class="section-head text-center">
            <p class="text wow fadeInUp" data-wow-delay="0.1s">Pengguna</p>
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">
                Masyarakat yang telah menggunakan sistem
            </h2>
        </div>
        <div class="swiper-btn-center-lr m-b30">
            <div class="testimonial-swiper swiper m-b30 swiper-btn-lr style-1">
                <div class="swiper-wrapper">
                    @foreach ($pelanggans as $pelanggan)
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="dz-media">
                                <img src="{{ asset('assets/images/person.png') }}" alt="" />
                            </div>
                            <div class="testimonial-detail">
                                <div class="testimonial-text">
                                    <p>
                                        {{ 'Saya masyarat di '.$pelanggan->user->biodata->alamat.' Berlokasikan di
                                        '.$pelanggan->lokasi->nama_lokasi. 'saya tinggal di area
                                        '.$pelanggan->tarif->sumber_sampah.' dengan biaya perbulannya adalah
                                        .'.$pelanggan->tarif->biaya }}
                                    </p>
                                </div>
                                <div class="testimonial-contant">
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">{{ $pelanggan->user->biodata->nama_lengkap }}</h5>
                                        <span class="testimonial-position">{{ $pelanggan->lokasi->desa->nama_desa
                                            }}</span>
                                    </div>
                                    <svg class="quote" width="100" height="72" viewBox="0 0 100 72" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.1771 0.706055C9.94877 0.706055 0.00158691 10.6532 0.00158691 22.8817C0.00158691 34.6782 9.25909 44.3537 20.8908 45.0221C21.0922 47.1965 20.9411 53.1154 15.2694 61.349C14.8407 61.9701 14.9185 62.8078 15.451 63.3403C17.7719 65.6612 19.2063 67.1229 20.2102 68.1453C21.5241 69.482 22.1238 70.0923 23.0011 70.8889C23.2986 71.1589 23.6739 71.2946 24.051 71.2946C24.4171 71.2946 24.7817 71.1665 25.0763 70.9117C34.9594 62.3118 45.9382 44.5429 44.3497 22.7687C43.4189 9.98496 34.0942 0.706055 22.1771 0.706055ZM24.0661 67.5975C23.6405 67.1779 23.1552 66.6835 22.4396 65.9556C21.5699 65.0692 20.3766 63.8545 18.5669 62.0387C25.4502 51.4323 24.15 43.8778 23.581 42.7943C23.3108 42.2801 22.7569 41.9337 22.1771 41.9337C11.673 41.9337 3.12659 33.3873 3.12659 22.8817C3.12659 12.3775 11.673 3.83105 22.1771 3.83105C32.4097 3.83105 40.4236 11.8907 41.2338 22.9945C43.0191 47.485 28.4638 63.3861 24.0661 67.5975Z"
                                            fill="var(--primary)" />
                                        <path
                                            d="M99.8444 22.7687C98.9105 9.98652 89.5844 0.706055 77.6703 0.706055C65.4419 0.706055 55.4932 10.6532 55.4932 22.8817C55.4932 34.6782 64.7522 44.3537 76.3855 45.0221C76.5869 47.195 76.4342 53.1107 70.7611 61.349C70.3324 61.9701 70.4102 62.8078 70.9427 63.3403C73.2544 65.652 74.6857 67.1107 75.6897 68.1315C77.0096 69.4773 77.6124 70.0907 78.4943 70.8903C78.7917 71.1589 79.1686 71.2946 79.5441 71.2946C79.9103 71.2946 80.275 71.1665 80.5694 70.9101C90.4525 62.3103 101.431 44.5415 99.8444 22.7687ZM79.5592 67.5975C79.1305 67.1748 78.6408 66.6775 77.9189 65.942C77.0492 65.0568 75.8607 63.8454 74.0585 62.0387C80.9417 51.4307 79.6433 43.8778 79.0757 42.7943C78.8055 42.2817 78.2502 41.9337 77.6703 41.9337C67.1646 41.9337 58.6182 33.3873 58.6182 22.8817C58.6182 12.3775 67.1646 3.83105 77.6703 3.83105C87.9013 3.83105 95.9167 11.8907 96.7285 22.9961C98.5122 47.4834 83.9569 63.3861 79.5592 67.5975Z"
                                            fill="var(--primary)" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-btn">
                <div class="testi-swiper-prev btn-prev style-1">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="testi-swiper-next btn-next style-1">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection