<?php

namespace App\Http\Controllers;

use App\Charts\SampahChart;
use App\Charts\TimbanganChart;
use App\Models\Desa;
use App\Models\Jalur;
use App\Models\Kenderaan;
use App\Models\Lokasi;
use App\Models\Pelanggan;
use App\Models\Pengelola;
use App\Models\Sampah;
use App\Models\Sopir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function dashboardForAdmin(TimbanganChart $timbanganChart, SampahChart $chart)
    {
        // $organik = Sampah::where('kategori_id', 2)->pluck('jumlah_sampah', 'id');
        // dd($organik->values());
        $totalDesa = Desa::count();
        $totalPengelola = Pengelola::count();
        $totalSopir = Sopir::count();
        $totalKenderaan = Kenderaan::count();
        $totalLokasi = Lokasi::count();
        $totalPelanggan = Pelanggan::count();
        $totalUser = User::count();
        $totalJalur = Jalur::count();
        $sampah = $chart->build();
        $timbangan = $timbanganChart->build();
        return view('backend.admin.dashboard', compact([
            'totalDesa',
            'totalPengelola',
            'totalSopir',
            'totalKenderaan',
            'totalLokasi',
            'totalPelanggan',
            'totalUser',
            'totalJalur',
            'sampah',
            'timbangan'
        ]));
    }

    public function dashboardForPengelola()
    {
        $totalDesa = Desa::count();
        $totalPengelola = Pengelola::where('desa_id', auth()->user()->pengelola->desa_id)->count();
        $totalSopir = Sopir::count();
        $totalKenderaan = Kenderaan::count();
        $totalLokasi = Lokasi::count();
        $totalPelanggan = Pelanggan::with('lokasi.desa')
            ->whereHas('lokasi.desa', function ($query) {
                $query->where('id', auth()->user()->pengelola->desa_id);
            })->count();
        $totalUser = User::count();
        $totalJalur = Jalur::count();
        return view('backend.pengelola.dashboard', compact([
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

    public function dashboardForSopir()
    {
        $totalDesa = Desa::count();
        $totalPengelola = Pengelola::count();
        $totalSopir = Sopir::count();
        $totalKenderaan = Kenderaan::count();
        $totalLokasi = Lokasi::count();
        $totalPelanggan = Pelanggan::count();
        $totalUser = User::count();
        $totalJalur = Jalur::count();
        return view('backend.sopir.dashboard', compact([
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

    public function dashboardForPengguna()
    {
        if (Auth::user()->pelanggan->lokasi_id == null) {
            Alert::info('Perhatian', 'Lengkapi biodata anda');
            return redirect()->route('akun.setting');
        }
        $totalDesa = Desa::count();
        $totalPengelola = Pengelola::count();
        $totalSopir = Sopir::count();
        $totalKenderaan = Kenderaan::count();
        $totalLokasi = Lokasi::count();
        $totalPelanggan = Pelanggan::count();
        $totalUser = User::count();
        $totalJalur = Jalur::count();
        return view('backend.pelanggan.dashboard', compact([
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
}
