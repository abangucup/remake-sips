<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        // Cek Kalau Belum Melakukan Login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // buat variable role
        // disesuaikan dengan database
        $role = Auth::user()->role->level;

        // cek jika role tidak sama dengan role yang ada
        if ($role !== $roles) {
            return back()->with('Halaman tidak ditemukan');
        }

        // jika sesuai
        return $next($request);
    }
}
