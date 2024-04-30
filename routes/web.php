<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/sesi/login', [App\Http\Controllers\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/sesi/authenticated', [App\Http\Controllers\Auth\LoginController::class, 'authenticated'])->name('login.authenticated');

Route::middleware(['auth', UserMiddleware::class])->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('dashboard/pendaftaran', [PendaftaranController::class, 'index'])->name('dashboard.pendaftaran');
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        /*
         * contains route for pendaftaran
         */
        Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
        Route::get('pendaftaran/cetak-kartu', [PendaftaranController::class, 'cetakKartu'])->name('pendaftaran.cetak_kartu');
        Route::get('pendaftaran/cetak-formulir', fn () => true)->name('pendaftaran.cetak_formulir');
        Route::post('pendaftaran/simpan', [PendaftaranController::class, 'simpan_pendaftaran'])->name('pendaftaran.simpan');
    });
});
