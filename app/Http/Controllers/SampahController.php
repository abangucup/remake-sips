<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SampahController extends Controller
{
    public function index()
    {
        $sampahs = Sampah::all();
        $kategoris = Kategori::all();
        return view('backend.admin.sampah.index', compact('sampahs', 'kategoris'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'kategori_id' => 'required',
            'nama_sampah' => 'required',
            'jumlah_sampah' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $sampah = new Sampah();
        $sampah->kategori_id = $request->kategori_id;
        $sampah->nama_sampah = $request->nama_sampah;
        $sampah->jumlah_sampah =  preg_replace('/[^\d]/', '', $request->jumlah_sampah);
        $sampah->tanggal_lapor = $request->tanggal_lapor;
        $sampah->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Sampah $sampah)
    {
        $validasi = Validator::make($request->all(), [
            'kategori_id' => 'required',
            'nama_sampah' => 'required',
            'jumlah_sampah' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        $sampah->update([
            'kategori_id' => $request->kategori_id,
            'nama_sampah' => $request->nama_sampah,
            'jumlah_sampah' =>  preg_replace('/[^\d]/', '', $request->jumlah_sampah),
            'tanggal_lapor' => $request->tanggal_lapor,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Sampah $sampah)
    {
        $sampah->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
