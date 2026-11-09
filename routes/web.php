<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('/cadastro', [RegisterController::class, 'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');

Route::middleware('auth')->group(function(){

    # Dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');

    #Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

});