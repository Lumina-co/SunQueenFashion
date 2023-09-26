<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HolidaysController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SeasonController;
use App\Models\Price;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('holidays', HolidaysController::class);
    Route::resource('price', PriceController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('season', SeasonController::class);
});

Route::get('/accueil', [FrontController::class, 'index'])->name('sqf.accueil');
