<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Kenderaan;
use App\Models\Sopir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SopirController extends Controller
{
    public function index()
    {
        $sopirs = Sopir::all();
        $kenderaans = Kenderaan::whereDoesntHave('sopir')->get();
        return view('backend.admin.sopir.index', compact('sopirs', 'kenderaans'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'kenderaan_id' => 'required',
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
        $user->role_id = 3;
        $user->biodata_id = $biodata->id;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        $sopir = new Sopir();
        $sopir->user_id = $user->id;
        $sopir->kenderaan_id = $request->kenderaan_id;
        $sopir->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Sopir $sopir)
    {
        $validasi = Validator::make($request->all(), [
            'kenderaan_id' => 'required',
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
        $sopir->user->biodata->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // perubahan user
        if ($request->password !== null) {
            $sopir->user->update([
                'password' => Hash::make('password'),
            ]);
        }

        $sopir->user->update([
            'username' => $request->username,
            'role_id' => 3,
        ]);

        // perubahan data Sopir
        if ($sopir->kenderaan->id !== $request->kenderaan_id) {
            $sopir->update([
                'kenderaan_id' => $request->kenderaan_id,
            ]);
        }

        $sopir->update([
            'status' => $request->status,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Sopir $sopir)
    {
        $sopir->user->biodata->delete();
        $sopir->user->delete();
        $sopir->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
