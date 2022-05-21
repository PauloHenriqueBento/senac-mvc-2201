<?php

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

Route::prefix('v1')->group(static function(){

    Route::get('/vendedores', [App\Http\Controllers\VendedresController::class, 'index']);
    Route::post('/vendedores', [App\Http\Controllers\VendedresController::class, 'store']);
    Route::delete('/vendedores/{id}', [App\Http\Controllers\VendedresController::class, 'destroy']);
    Route::get('/vendedores/{id}', [App\Http\Controllers\VendedresController::class, 'show']);
    Route::put('/vendedores/{id}', [App\Http\Controllers\VendedresController::class, 'update']);

});