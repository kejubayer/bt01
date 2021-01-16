<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\DashboardController::class,'index']);

Route::get('/test', [\App\Http\Controllers\DashboardController::class,'test']);

Route::get('/users', [\App\Http\Controllers\UserController::class,'index'])->name('user.index');
Route::get('/users/create', [\App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('/users/store', [\App\Http\Controllers\UserController::class,'store'])->name('user.store');
Route::get('/users/{id}', [\App\Http\Controllers\UserController::class,'show'])->name('user.show');
Route::get('/users/edit/{id}', [\App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
Route::post('/users/update/{id}', [\App\Http\Controllers\UserController::class,'update'])->name('user.update');
Route::get('/users/delete/{id}', [\App\Http\Controllers\UserController::class,'delete'])->name('user.delete');


