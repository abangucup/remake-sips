<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kenderaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class KenderaanController extends Controller
{
    public function index()
    {
        $kenderaans = Kenderaan::all();
        $jenisKenderaan = Jenis::all();
        return view('backend.admin.kenderaan.index', compact('kenderaans', 'jenisKenderaan'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_kenderaan' => 'required',
            'nomor_polisi' => 'required',
            'jenis_id' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $kenderaan = new Kenderaan();
        $kenderaan->kode_kenderaan = '#K-' . strtoupper(substr(Str::uuid(), 0, 4));
        $kenderaan->nama_kenderaan = $request->nama_kenderaan;
        $kenderaan->nomor_polisi = $request->nomor_polisi;
        $kenderaan->jenis_id = $request->jenis_id;
        $kenderaan->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Kenderaan $kenderaan)
    {
        $validasi = Validator::make($request->all(), [
            'nama_kenderaan' => 'required',
            'nomor_polisi' => 'required',
            'jenis_id' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        $kenderaan->update([
            'nama_kenderaan' => $request->nama_kenderaan,
            'nomor_polisi' => $request->nomor_polisi,
            'jenis_id' => $request->jenis_id,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Kenderaan $kenderaan)
    {
        $kenderaan->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
