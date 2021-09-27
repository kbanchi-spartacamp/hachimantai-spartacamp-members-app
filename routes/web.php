<?php

use App\Models\Recruit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/top', 302);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/top', [
    App\Http\Controllers\TopController::class, 'top'
])->middleware('auth');;

Route::get('/car', [
    App\Http\Controllers\CarController::class, 'index'
])->middleware('auth');;

Route::get('/controller/recruit', [
    App\Http\Controllers\RecruitController::class, 'recruit'
])->middleware('auth');;

Route::get('hot-spring', [
    App\Http\Controllers\HotSpringController::class, 'hotspring'
])->middleware('auth');;

Route::get('/wifi-spots', [
    App\Http\Controllers\WifiSpotController::class, 'index'
])->middleware('auth');;

Route::get('/wifi-spots/{id}/map', [
    App\Http\Controllers\WifiSpotController::class, 'map'
])->middleware('auth');;

Route::get('/restaurants', [
    App\Http\Controllers\RestaurantController::class, 'index'
])->middleware('auth');;

Route::resource('recruits', App\Http\Controllers\RecruitController::class)->middleware('auth');;
