<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Pelanggan;

class FrontendController extends Controller
{
    public function home()
    {
        $kategoris = Kategori::all();
        $pelanggans = Pelanggan::all();
        $jenisKenderaan = Jenis::all();
        return view('frontend.home', compact('jenisKenderaan', 'pelanggans', 'kategoris'));
    }

    public function jenisKenderaan()
    {
        $jenisKenderaan = Jenis::all();
        return view('frontend.jenis', compact('jenisKenderaan'));
    }

    public function jalurKenderaan()
    {
        return view('frontend.jalur');
    }

    public function listDesa()
    {
        return view('frontend.desa');
    }

    public function capaianSampah()
    {
        return view('frontend.sampah');
    }
}
