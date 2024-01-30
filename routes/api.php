<?php

use App\Http\Controllers\api\InformasiApiController;
use App\Http\Controllers\api\InformasiController;
use App\Http\Controllers\api\PesertaApiController;
use App\Http\Controllers\api\PesertaController;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [PesertaApiController::class, 'loginApi']);
//http://localhost:8000/api/login
Route::post('logout', [PesertaApiController::class, 'logoutApi']);
//http://localhost:8000/api/login
Route::apiResource('peserta', PesertaApiController::class);
// ->middleware('auth:sanctum');
//Route::get('peserta-index', [PesertaApiController::class, 'index']);
//Route::get('/peserta-show/{id_peserta}', [PesertaApiController::class, 'show']);
//http://localhost:8000/api/peserta
Route::apiResource('informasi', InformasiApiController::class);
// ->middleware('auth:sanctum');
//Route::apiResource('informasi-index', [InformasiApiController::class, 'loginApi']);
//http://localhost:8000/api/informasi
