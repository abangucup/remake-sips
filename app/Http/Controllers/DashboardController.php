<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Jalur;
use App\Models\Kenderaan;
use App\Models\Lokasi;
use App\Models\Pelanggan;
use App\Models\Pengelola;
use App\Models\Sopir;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardForAdmin()
    {
        $totalDesa = Desa::count();
        $totalPengelola = Pengelola::count();
        $totalSopir = Sopir::count();
        $totalKenderaan = Kenderaan::count();
        $totalLokasi = Lokasi::count();
        $totalPelanggan = Pelanggan::count();
        $totalUser = User::count();
        $totalJalur = Jalur::count();
        return view('backend.admin.dashboard', compact([
            'totalDesa',
            'totalPengelola',
            'totalSopir',
            'totalKenderaan',
            'totalLokasi',
            'totalPelanggan',
            'totalUser',
            'totalJalur',
        ]));
    }

    public function dashboardForPengelola()
    {
        return view('backend.pengelola.dashboard');
    }

    public function dashboardForSopir()
    {
        return view('backend.sopir.dashboard');
    }

    public function dashboardForPelanggan()
    {
        return view('backend.pelanggan.dashboard');
    }
}