<?php

use App\Http\Controllers\GuideController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroStatsController;
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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('heroes', [HeroController::class, 'index'])->name('heroes.index');

Auth::routes();

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('heroes', HeroController::class)
        ->except('index');
    Route::resource('heroes.guide', GuideController::class);
});

