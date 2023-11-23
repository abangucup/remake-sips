<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Desa;
use App\Models\Pengelola;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PengelolaController extends Controller
{
    public function index()
    {
        $pengelolas = Pengelola::all();
        $desas = Desa::all();
        return view('backend.admin.pengelola.index', compact('pengelolas', 'desas'));
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'desa_id' => 'required',
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
        $user->role_id = 2;
        $user->biodata_id = $biodata->id;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        $pengelola = new Pengelola();
        $pengelola->user_id = $user->id;
        $pengelola->desa_id = $request->desa_id;
        $pengelola->save();

        Alert::success('Success', 'Berhasil tambah data');
        return back();
    }

    public function update(Request $request, Pengelola $pengelola)
    {
        $validasi = Validator::make($request->all(), [
            'desa_id' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'status' => 'required'
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi keselahan saat ubah data');
            return back();
        }

        // perubahan biodata
        $pengelola->user->biodata->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // perubahan user
        if ($request->password !== null) {
            $pengelola->user->update([
                'password' => Hash::make('password'),
            ]);
        }

        $pengelola->user->update([
            'username' => $request->username,
            'role_id' => 2
        ]);

        // perubahan data pengelola
        if ($pengelola->desa->id !== $request->desa_id) {
            $pengelola->update([
                'desa_id' => $request->desa_id,
            ]);
        }

        $pengelola->update([
            'status' => $request->status,
        ]);

        Alert::success('Success', 'Berhasil ubah data');
        return back();
    }

    public function destroy(Pengelola $pengelola)
    {
        $pengelola->user->biodata->delete();
        $pengelola->user->delete();
        $pengelola->delete();
        Alert::success('Success', 'Berhasil hapus data');
        return back();
    }
}
