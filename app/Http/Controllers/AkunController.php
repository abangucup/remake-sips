<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Lokasi;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AkunController extends Controller
{
    public function setting()
    {
        $user = Auth::user();
        $tarifs = Tarif::all();
        $lokasis = Lokasi::all();
        return view('backend.setting.akun', compact('user', 'tarifs', 'lokasis'));
    }

    public function changeBiodata(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'lokasi_id' => 'required',
            'tarif_id' => 'required'
        ]);
        if ($validasi->fails()) {
            Alert::error('Maaf', 'periksa kembali data inputan');
        }
        $user = Auth::user();
        $user->biodata->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
        ]);

        $user->pelanggan->update([
            'lokasi_id' => $request->lokasi_id,
            'tarif_id' => $request->tarif_id,
        ]);

        Alert::success('Tersimpan', 'Perubahan disimpan');
        return back();
    }

    public function changeAccount(Request $request, User $user)
    {
        $validasi = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,' . $user->id,
        ]);
        if ($validasi->fails()) {
            Alert::error('Maaf', 'Username sudah ada');
        }

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);

        Auth::logout();
        Alert::success('Berhasil', 'Akun berhasil dirubah');
        return redirect()->route('login');
    }

    public function changePassword(Request $request, User $user)
    {
        $validasi = Validator::make($request->all(), [
            'password' => 'required',
            'newPassword' => 'required',
            'samePassword' => 'required|same:newPassword',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Password Baru harus sama dengan Konfirmasi Password');
            return redirect()->back();
        }

        if (!Hash::check($request->password, $user->password)) {
            Alert::error('Gagal Ubah Password', 'Password Saat Ini tidak sesuai dengan password lama anda');
            return redirect()->back();
        }

        $user->update([
            'password' => Hash::make($request->newPassword),
        ]);

        Alert::success('Berhasil', 'Password Telah Dirubah');
        Auth::logout();
        return redirect()->route('login');
    }

    public function deleteAccount(User $user)
    {
        $user->delete();
        $user->biodata->delete();
        Alert::success('success', 'Akun anda telah di hapus');
        return redirect()->route('login');
    }
}
