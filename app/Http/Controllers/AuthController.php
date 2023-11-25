<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Lokasi;
use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        $credential = $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credential)) {
            $role = Auth::user()->role->level;
            if ($role === 'admin') {
                return redirect()->route('admin');
            } elseif ($role === 'pengelola') {
                return redirect()->route('pengelola');
            } elseif ($role === 'sopir') {
                return redirect()->route('sopir');
            } else {
                return redirect()->route('pengguna');
            }
            Alert::success('Welcome', 'Anda masuk sebagai ' . $role);
        }

        Alert::toast('Username atau Password salah', 'error');

        return back()->withInput($credential);
    }

    public function register()
    {
        $lokasis = Lokasi::all();
        $tarifs = Tarif::all();
        return view('auth.register', compact('lokasis', 'tarifs'));
    }

    public function storeRegister(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        if ($validasi->fails()) {
            Alert::error('Error', 'Terjadi kesalahan regis');
            return back();
        }

        $biodata = new Biodata();
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->save();

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->biodata_id = $biodata->id;
        $user->role_id = 4;
        $user->save();

        $pelanggan = new Pelanggan();
        $pelanggan->user_id = $user->id;
        $pelanggan->no_register = '#L' . $request->lokasi_id . 'P' . strtoupper(substr(Str::uuid(), 0, 4));
        $pelanggan->save();

        Alert::success('success', 'Register berhasil');
        return redirect()->route('login');
    }


    public function logout()
    {
        Auth::logout();

        Alert::info('Terimakasih', 'Sampai jumpa lagi');
        return redirect()->route('home');
    }
}
