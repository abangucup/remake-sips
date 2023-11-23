<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use App\Models\Kenderaan;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class JalurController extends Controller
{
    public function index()
    {
        $jalurs = Jalur::all();
        $kenderaans = Kenderaan::all();
        $lokasis = Lokasi::all();
        return view('backend.admin.jalur.index', compact('jalurs', 'kenderaans', 'lokasis'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'kenderaan_id' => 'required',
            'lokasi_id' => 'required',
            'hari' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $lokasis = $request->lokasi_id;
        foreach ($lokasis as $lokasi) {
            Jalur::create([
                'kenderaan_id' => $request->kenderaan_id,
                'lokasi_id' => $lokasi,
                'hari' => $request->hari,
            ]);
        }

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Jalur $jalur)
    {
        $validasi = Validator::make($request->all(), [
            'kenderaan_id' => 'required',
            'lokasi_id' => 'required',
            'hari' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $jalur->update([
            'kenderaan_id' => $request->kenderaan_id,
            'lokasi_id' => $request->lokasi_id,
            'hari' => $request->hari,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Jalur $jalur)
    {
        $jalur->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
