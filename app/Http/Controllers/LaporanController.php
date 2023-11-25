<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use App\Models\Jenis;
use App\Models\Kenderaan;
use App\Models\Pembayaran;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function laporanUser()
    {
        $users = User::all();
        return view('backend.laporan.laporan_user', compact('users'));
    }

    public function laporanPembayaran()
    {
        $pembayarans = Pembayaran::all();
        return view('backend.laporan.laporan_pembayaran', compact('pembayarans'));
    }

    public function laporanJalur()
    {
        $user = auth()->user();
        if ($user->role->level == 'sopir') {
            $kenderaan = Kenderaan::where('id', $user->sopir->kenderaan_id)->first();
            return view('backend.laporan.laporan_jalur', compact('kenderaan'));
        } else {
            $kenderaans = Kenderaan::whereHas('lokasis')->get();
        }
        return view('backend.laporan.laporan_jalur', compact('kenderaans'));
    }

    // FUNGSI CETAK
    public function cetakLaporanUser()
    {
        $users = User::all();
        $pdf = Pdf::loadView('backend.laporan.cetak.cetak_user', compact('users'))->setPaper('A4', 'landscape');

        return $pdf->stream('Laporan Data User ' . Carbon::now()->isoFormat('LLLL') . '.pdf');
    }

    public function cetakLaporanPembayaran()
    {
        $pembayarans = Pembayaran::all();
        $pdf = Pdf::loadView('backend.laporan.cetak.cetak_pembayaran', compact('pembayarans'))->setPaper('A4', 'landscape');

        return $pdf->stream('Laporan Pembayaran ' . Carbon::now()->isoFormat('LLLL') . '.pdf');
    }


    public function cetakLaporanJalur(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'tampilan' => 'required',
        ]);
        if ($validasi->fails()) {
            Alert::error('Maaf', 'Terjadi kesalahan saat memilih tampilan');
            return back();
        }

        if ($request->tampilan == 'tabel') {
            $kenderaans = Kenderaan::whereHas('lokasis')->get();
            $pdf = Pdf::loadView('backend.laporan.cetak.jalur_berdasarkan_tabel', compact('kenderaans'))->setPaper('A4', 'landscape');
        } elseif ($request->tampilan == 'jenis') {
            $jenisKenderaan = Jenis::with(['kenderaans' => function ($query) {
                $query->whereHas('lokasis');
            }])->whereHas('kenderaans', function ($query) {
                $query->whereHas('lokasis');
            })->get();
            return view('backend.laporan.cetak.jalur_berdasarkan_jenis', compact('jenisKenderaan'));
            // $pdf = Pdf::loadView('backend.laporan.cetak.jalur_berdasarkan_jenis', compact('kenderaans'))->setPaper('A4', 'potrait');
        } else {
            $jalurByHari = Jalur::with('kenderaan', 'lokasi')->orderBy('hari', 'desc')->get()->groupBy('hari');
            $pdf = Pdf::loadView('backend.laporan.cetak.jalur_berdasarkan_hari', compact('jalurByHari'))->setPaper('A4', 'potrait');
        }

        return $pdf->stream('Laporan Jalur - ' . Carbon::now()->isoFormat('LLLL') . '.pdf');
    }
}
