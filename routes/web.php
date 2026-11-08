<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;

# Site
Route::get('/', [SiteController::class, 'index'])->name('site.index');

#Login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');

Route::middleware('auth')->group(function(){

    # Dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');

    #Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

});