<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/sesi/login', [App\Http\Controllers\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/sesi/authenticated', [App\Http\Controllers\Auth\LoginController::class, 'authenticated'])->name('login.authenticated');

Route::middleware(['auth', UserMiddleware::class])->group(function () {
    Route::get('dashboard', [HomeController::class,'index'])->name('dashboard');
    Route::get('dashboard/pendaftaran', [PendaftaranController::class,'index'])->name('dashboard.pendaftaran');
});
