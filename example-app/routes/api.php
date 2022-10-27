<?php

use App\Http\Controllers\API\PenggunaController;
use App\Http\Controllers\API\PartiSatkerController;
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

Route::apiResource('Pengguna',PenggunaController::class);
Route::apiResource('User',PenggunaController::class);
Route::apiResource('PartiSatker',PartiSatkerController::class);

