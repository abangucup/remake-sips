<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasis = Lokasi::all();
        $desas = Desa::all();
        return view('backend.admin.lokasi.index', compact('lokasis', 'desas'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'desa_id' => 'required',
            'nama_lokasi' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $lokasi = new Lokasi();
        $lokasi->desa_id = $request->desa_id;
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Lokasi $lokasi)
    {
        $validasi = Validator::make($request->all(), [
            'desa_id' => 'required',
            'nama_lokasi' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }
        if ($lokasi->desa_id !== $request->desa_id) {
            $lokasi->update([
                'desa_id' => $request->desa_id,
            ]);
        }

        $lokasi->update([
            'nama_lokasi' => $request->nama_lokasi,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Lokasi $lokasi)
    {
        $lokasi->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
