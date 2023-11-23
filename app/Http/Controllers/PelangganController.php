<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Lokasi;
use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::with('lokasi.desa')
            ->whereHas('lokasi.desa', function ($query) {
                $query->where('id', auth()->user()->pengelola->desa_id);
            })
            ->get();
        $lokasis = Lokasi::where('desa_id', auth()->user()->pengelola->desa_id)->get();
        $tarifs = Tarif::all();
        return view('backend.pengelola.pelanggan.index', compact('pelanggans', 'lokasis', 'tarifs'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'lokasi_id' => 'required',
            'tarif_id' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat input data');
            return back();
        }

        $biodata = new Biodata();
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->alamat = $request->alamat;
        $biodata->no_hp = $request->no_hp;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->save();

        $user = new User();
        $user->role_id = 4;
        $user->biodata_id = $biodata->id;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        $pelanggan = new pelanggan();
        $pelanggan->lokasi_id = $request->lokasi_id;
        $pelanggan->user_id = $user->id;
        $pelanggan->tarif_id = $request->tarif_id;
        $pelanggan->no_register = '#L' . $request->lokasi_id . 'P' . strtoupper(substr(Str::uuid(), 0, 4));
        $pelanggan->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, pelanggan $pelanggan)
    {
        $validasi = Validator::make($request->all(), [
            'lokasi_id' => 'required',
            'tarif_id' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        // perubahan biodata
        $pelanggan->user->biodata->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // perubahan user
        if ($request->password !== null) {
            $pelanggan->user->update([
                'password' => Hash::make('password'),
            ]);
        }

        $pelanggan->user->update([
            'username' => $request->username,
            'role_id' => 4
        ]);

        $pelanggan->update([
            'tarif_id' => $request->tarif_id,
            'lokasi_id' => $request->lokasi_id,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(pelanggan $pelanggan)
    {
        $pelanggan->user->biodata->delete();
        $pelanggan->user->delete();
        $pelanggan->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
