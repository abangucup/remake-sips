<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
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
    });

    Route::match(['get', 'post'], 'logout', [AuthController::class, 'logout'])->name('logout');
});
