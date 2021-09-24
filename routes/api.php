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

Route::group(['middleware' => ['api']], function () {
    Route::apiResource('wifi-spots', App\Http\Controllers\Api\WifiSpotController::class);
});

Route::group(['middleware' => ['api']], function () {
    Route::apiResource('restaurants', App\Http\Controllers\Api\RestaurantController::class);
});
