<?php

use App\Http\Controllers\api\InformasiApiController;
use App\Http\Controllers\api\InformasiController;
use App\Http\Controllers\api\PesertaApiController;
use App\Http\Controllers\api\PesertaController;
use App\Models\Peserta;
use Illuminate\Http\Request;
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

Route::apiResource('peserta', PesertaApiController::class);
Route::apiResource('informasi', InformasiApiController::class);
