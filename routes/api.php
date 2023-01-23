<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\HomeController;

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
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('bus_schedule', [HomeController::class, 'bus_schedule']);
    Route::post('time_schedule_store', [HomeController::class, 'time_schedule_store']);
    Route::post('bus_schedule_store', [HomeController::class, 'bus_schedule_store']);
    Route::get('movie_time', [HomeController::class, 'movie_time']);
});
