<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        dd($request->all());
    }


    public function logout()
    {
        Auth::logout();

        Alert::info('Goodbye', 'Sampai jumpa lagi');
        return redirect()->route('home');
    }
}
