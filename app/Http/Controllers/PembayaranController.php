<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::whereHas('pelanggan', function ($query) {
            $query->whereHas('lokasi', function ($query) {
                $query->where('desa_id', Auth::user()->pengelola->desa_id);
            });
        })->get();

        return view('backend.pengelola.pembayaran.index', compact('pembayarans'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function update(Pembayaran $pembayaran)
    {
        $pembayaran->update([
            'status_bayar' => 'lunas',
        ]);

        Alert::success('Pembayaran success', 'tagihan telah dibayarkan');
        return redirect()->back();
    }


    public function tagihanSaya()
    {
        $pembayarans = Pembayaran::where('pelanggan_id', Auth::user()->pelanggan->id)->get();
        $tagihan = Pembayaran::where('pelanggan_id', Auth::user()->pelanggan->id)
            ->where('status_bayar', 'pending')->latest()->first();
        // dd($tagihan->tanggal_bayar);
        // dd(Carbon::parse($tagihan->tanggal_bayar)->isoFormat('MMM'));
        $pelanggan = Pelanggan::where('id', Auth::user()->pelanggan->id)->with('pembayarans')->first();

        // dd($pelanggan->pembayarans->isEmpty() || ($tagihan &&
        //     \Carbon\Carbon::parse($tagihan->tanggal_bayar)->isoFormat('MMMM') !==
        //     \Carbon\Carbon::parse(now())->isoFormat('MMMM')));
        return view('backend.pelanggan.pembayaran.index', compact('pembayarans', 'pelanggan', 'tagihan'));
    }

    public function bayarTagihanSaya(Request $request)
    {
        // dd(Carbon::parse($request->tanggal_bayar)->format('Y-m-d'));
        $tanggal_bayar = date(now());
        // dd(date(now()));
        // dd($tanggal_bayar);
        // dd($tanggal_bayar);
        // dd($request->tanggal_bayar);
        $validasi = Validator::make($request->all(), [
            'no_register' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Maaf', 'Periksa kembali data');
            return back();
        }

        $pelanggan = Pelanggan::where('no_register', $request->no_register)->first();

        $pembayaran = new Pembayaran();
        $pembayaran->tanggal_bayar = $tanggal_bayar;
        $pembayaran->pelanggan_id = $pelanggan->id;
        $pembayaran->status_bayar = 'pending';
        $pembayaran->save();

        Alert::info('Pembayaran Terekam', 'Silahkan Bayar Langsung Di Desa');
        return redirect()->back();
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        Alert::success('Berhasil', 'Pembayaran Di Hapus');
        return redirect()->back();
    }
}
