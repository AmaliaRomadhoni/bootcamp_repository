

<?php

use App\Http\Controllers\UserController;
use App\Models\Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::resource('/repository', \App\Http\Controllers\RepositoryController::class);
























//Route::get('user/products', 'ProductsController@index');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 //Route::get('/repository/index', [UserController::class, 'index'])->name('user');

//Route::get('/user/create', [UserController::class, 'create'])->name('user');

//Route::get('/user/edit', [UserController::class, 'edit']);

//Route::get('/user/search', [UserController::class, 'search']);

//Route::get('/user/show', [UserController::class, 'show']);

//Route::resource('user', UserController::class);
//Route::get('/user/caridata', [UserController::class, 'cariData'])->name('user.caridata');