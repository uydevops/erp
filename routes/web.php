<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController as Login;



Route::get('/', [Login::class, 'index'])->name('index');


Route::post('/login', [Login::class, 'login'])->name('loginPage');