<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('/', [App\Http\Controllers\HomeController::class, 'time_schedule'])->name('time_schedule');
Route::get('/bus-schedule', [App\Http\Controllers\HomeController::class, 'bus_schedule'])->name('bus_schedule');
Route::get('/movie-time', [App\Http\Controllers\HomeController::class, 'movie_time'])->name('movie_time');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
