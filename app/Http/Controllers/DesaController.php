<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DesaController extends Controller
{
    public function index()
    {
        $desas = Desa::all();
        return view('backend.admin.desa.index', compact('desas'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_desa' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $desa = new Desa();
        $desa->nama_desa = $request->nama_desa;
        $desa->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Desa $desa)
    {
        $validasi = Validator::make($request->all(), [
            'nama_desa' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        $desa->update([
            'nama_desa' => $request->nama_desa,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Desa $desa)
    {
        $desa->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
