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
            $role = Auth::user()->role;
            if ($role === 'admin') {
                return redirect()->route('admin');
            }
        }

        Alert::toast('Username atau Password salah', 'error');

        return back()->withInput($credential);
    }
}
