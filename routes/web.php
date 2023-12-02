<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController as Login;
use App\Http\Controllers\Dashboard\DashboardController as Dashboard;



Route::middleware(['web'])->group(function () {
    Route::get('/', [Login::class, 'index'])->name('index');
    Route::post('/login', [Login::class, 'login'])->name('loginPage');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [Dashboard::class, 'home'])->name('home');
    Route::get('/logout', [Dashboard::class, 'logout'])->name('logout');
});
