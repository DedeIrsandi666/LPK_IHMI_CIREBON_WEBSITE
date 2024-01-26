<?php

use App\Http\Controllers\PesertaController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('welcome', function () {
    return view('welcome');
});

// Route::get('welcome', function () {
//     return view('home');
// });


Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate']);
Route::resource('peserta', \App\Http\Controllers\PesertaController::class);
Route::resource('informasi', \App\Http\Controllers\InformasiController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);

Route::get('user-show', [\App\Http\Controllers\UserController::class, 'show']);
Route::get('/user-edit/{id_user}', [\App\Http\Controllers\UserController::class, 'edit']);
Route::put('/user-store', [\App\Http\Controllers\UserController::class, 'store']);
Route::put('/user-update/{id_user}', [\App\Http\Controllers\UserController::class, 'update']);
Route::get('/user-delete/{id_user}', [\App\Http\Controllers\UserController::class, 'destroy']);
Route::get('/delete-data/{id}', [PesertaController::class, 'deleteData']);


