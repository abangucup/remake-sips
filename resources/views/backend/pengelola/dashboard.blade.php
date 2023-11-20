@extends('backend.template.app')

@section('title', 'Pengelola - Dashboard')

@section('content')
<div class="form-head d-flex mb-3 align-items-start">
    <div class="me-auto d-none d-lg-block">
        <h2 class="text-primary font-w600 mb-0">Dashboard</h2>
        <p class="mb-0">Welcome {{ $user->biodata->nama_lengkap }} - Login Sebagai {{
            Str::ucfirst($user->role->level)
            }}!</p>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-home"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalDesa }}</span>
                        </h3>
                        <p class="mb-0">Total Desa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-users-cog"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalPengelola }}</span>
                        </h3>
                        <p class="mb-0">Total Pengelola</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-user"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalPelanggan }}</span>
                        </h3>
                        <p class="mb-0">Total Pelanggan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-location-arrow"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalLokasi }}</span>
                        </h3>
                        <p class="mb-0">Total Lokasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-car-side"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalKenderaan }}</span>
                        </h3>
                        <p class="mb-0">Total Kenderaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-id-card-alt"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalSopir }}</span>
                        </h3>
                        <p class="mb-0">Total Sopir</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-id-card-alt"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalSopir }}</span>
                        </h3>
                        <p class="mb-0">Total Sopir</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon d-flex">
                    <span class="me-3 bgl-primary text-primary">
                        <i class="fa fa-user-check"></i>
                    </span>
                    <div class="media-body">
                        <h3 class="mb-0 text-black">
                            <span class="counter ms-0">{{ $totalUser }}</span>
                        </h3>
                        <p class="mb-0">Total User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection