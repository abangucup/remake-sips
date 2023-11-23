<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('backend.admin.kategori.index', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'kategori_sampah' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $kategori = new Kategori();
        $kategori->kategori_sampah = $request->kategori_sampah;
        $kategori->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Kategori $kategori)
    {
        $validasi = Validator::make($request->all(), [
            'kategori_sampah' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        $kategori->update([
            'kategori_sampah' => $request->kategori_sampah,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
