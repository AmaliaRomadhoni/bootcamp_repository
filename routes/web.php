<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/user', [UserController::class, 'index'])->name('user');

//Route::get('/user', [UserController::class, 'create'])->name('user');

//Route::get('/user', [UserController::class, 'edit'])->name('user');

//cara kedua
Route::resource('user', UserController::class);
//Route::get('/user/caridata', [UserController::class, 'cariData'])->name('user.caridata');