<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\JenisKenderaanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KenderaanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\TimbanganController;
use Illuminate\Support\Facades\Route;

// Bisa diakses siapa saja
Route::get('/', [FrontendController::class, 'home'])->name('home');

// Hanya dapat di akses oleh tamu atau belum login
Route::middleware('guest')->group(function () {
    // GET
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('forgot-password', [AuthController::class, 'forgot'])->name('forgot');
    Route::get('verified', [AuthController::class, 'verified'])->name('verification');

    // POST
    Route::post('login', [AuthController::class, 'storeLogin']);
    Route::post('register', [AuthController::class, 'storeRegister']);
    Route::post('forgot-password', [AuthController::class, 'sendEmailForgotPassword']);
    Route::post('verified', [AuthController::class, 'sendEmailVerfication']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
        Route::get('dashboard', [DashboardController::class, 'dashboardForAdmin'])->name('admin');
        // master tabel
        Route::resource('desa', DesaController::class);
        Route::resource('jenis-kenderaan', JenisKenderaanController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('tarif', TarifController::class);

        // transaksi tabel
        Route::resource('pengelola', PengelolaController::class);
        Route::resource('lokasi', LokasiController::class);
        Route::resource('kenderaan', KenderaanController::class);
        Route::resource('sopir', SopirController::class);
        Route::resource('jalur', JalurController::class);
        Route::resource('sampah', SampahController::class);

        // Laporan
        Route::get('laporan/user', [LaporanController::class, 'laporanUser'])->name('laporan.user');
        Route::get('laporan/pembyaran', [LaporanController::class, 'laporanPembayaran'])->name('laporan.pembayaran');
        Route::post('laporan/jalur/cetak', [LaporanController::class, 'cetakLaporanJalur'])->name('cetak.jalur');
    });
    Route::group(['middleware' => ['role:pengelola'], 'prefix' => 'pengelola'], function () {
        Route::get('dashboard', [DashboardController::class, 'dashboardForPengelola'])->name('pengelola');
        Route::resource('pelanggan', PelangganController::class);
        Route::get('pembayaran', [PembayaranController::class, 'bayar'])->name('bayar');
    });
    Route::group(['middleware' => ['role:sopir'], 'prefix' => 'sopir'], function () {
        Route::get('dashboard', [DashboardController::class, 'dashboardForSopir'])->name('sopir');
        Route::resource('timbangan', TimbanganController::class);
    });
    Route::group(['middleware' => ['role:pelanggan'], 'prefix' => 'pelanggan'], function () {
        Route::get('dashboard', [DashboardController::class, 'dashboardForPelanggan'])->name('pelanggan');
    });

    Route::get('laporan/jalur', [LaporanController::class, 'laporanJalur'])->name('laporan.jalur');

    Route::match(['get', 'post'], 'logout', [AuthController::class, 'logout'])->name('logout');
});
