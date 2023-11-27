<?php

namespace App\Http\Controllers;

use App\Charts\TimbanganChart;
use App\Models\Desa;
use App\Models\Jalur;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Kenderaan;
use App\Models\Pelanggan;
use App\Models\Sampah;
use App\Models\Timbangan;

class FrontendController extends Controller
{
    public function home()
    {
        $kategoris = Kategori::all();
        $pelanggans = Pelanggan::all();
        $jenisKenderaan = Jenis::all();
        return view('frontend.home', compact('jenisKenderaan', 'pelanggans', 'kategoris'));
    }

    public function listKenderaan()
    {
        $kenderaans = Kenderaan::paginate(6);
        return view('frontend.kenderaan', compact('kenderaans'));
    }

    public function detailKenderaan(Kenderaan $kenderaan)
    {
        return view('frontend.detail-kenderaan', compact('kenderaan'));
    }

    public function jalurKenderaan()
    {
        $jenisKenderaan = Jenis::with('kenderaans')->get();
        return view('frontend.jalur', compact('jenisKenderaan'));
    }

    public function listDesa()
    {
        $desas = Desa::paginate(6);
        return view('frontend.desa', compact('desas'));
    }

    public function detailDesa(Desa $desa)
    {
        $lokasis = $desa->lokasis()->paginate(6);
        return view('frontend.detail-desa', compact('desa', 'lokasis'));
    }

    public function capaianSampah(TimbanganChart $chart)
    {
        $kategoris = Kategori::all();

        return view('frontend.sampah', [
            'kategoris' => $kategoris,
            'chart' => $chart->build(),
        ]);
    }
}
