<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class JenisKenderaanController extends Controller
{
    public function index()
    {
        $jenisKenderaan = Jenis::all();
        return view('backend.admin.jenis.index', compact('jenisKenderaan'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'jenis_kenderaan' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $jenis = new Jenis();
        $jenis->jenis_kenderaan = $request->jenis_kenderaan;
        $jenis->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Jenis $jenis_kenderaan)
    {
        $validasi = Validator::make($request->all(), [
            'jenis_kenderaan' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $jenis_kenderaan->update([
            'jenis_kenderaan' => $request->jenis_kenderaan,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Jenis $jenis_kenderaan)
    {
        $jenis_kenderaan->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
