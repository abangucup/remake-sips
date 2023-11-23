<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TarifController extends Controller
{
    public function index()
    {
        $tarifs = Tarif::all();
        return view('backend.admin.tarif.index', compact('tarifs'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'sumber_sampah' => 'required',
            'biaya' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $tarif = new Tarif();
        $tarif->sumber_sampah = $request->sumber_sampah;
        $tarif->biaya = preg_replace('/[^\d]/', '', $request->biaya);
        $tarif->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Tarif $tarif)
    {
        $validasi = Validator::make($request->all(), [
            'sumber_sampah' => 'required',
            'biaya' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        $tarif->update([
            'sumber_sampah' => $request->sumber_sampah,
            'biaya' => preg_replace('/[^\d]/', '', $request->biaya),
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Tarif $tarif)
    {
        $tarif->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
