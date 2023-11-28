<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function tagihanSaya()
    {
        $pembayarans = Pembayaran::where('pelanggan_id', Auth::user()->pelanggan->id)->get();
        return view('backend.pelanggan.pembayaran.index', compact('pembayarans'));
    }
}
