<?php

namespace App\Http\Controllers;

use App\Models\Timbangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TimbanganController extends Controller
{
    public function index()
    {
        $timbangans = Timbangan::where('kenderaan_id', auth()->user()->sopir->kenderaan_id)->get();
        return view('backend.sopir.timbangan.index', compact('timbangans'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'berat_sampah' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $timbangan = new Timbangan();
        $timbangan->kenderaan_id = auth()->user()->sopir->kenderaan_id;
        $timbangan->berat_sampah = preg_replace('/[^\d]/', '', $request->berat_sampah);
        $timbangan->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Timbangan $timbangan)
    {
        $validasi = Validator::make($request->all(), [
            'berat_sampah' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $timbangan->update([
            'berat_sampah' => preg_replace('/[^\d]/', '', $request->berat_sampah),
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Timbangan $timbangan)
    {
        $timbangan->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
