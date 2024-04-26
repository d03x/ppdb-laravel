<?php

use App\Http\Middleware\UserMiddleware;
use App\Models\Formulir;
use Illuminate\Support\Facades\Route;

Route::get('/sesi/login', [App\Http\Controllers\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/sesi/authenticated', [App\Http\Controllers\Auth\LoginController::class, 'authenticated'])->name('login.authenticated');


Route::middleware(['auth',UserMiddleware::class])->group(function(){
    Route::get('dashboard', function () {
        dd(Auth::user()->formulir->biodata());
        return view('pages.dashboard');
    })->name('dashboard');
});