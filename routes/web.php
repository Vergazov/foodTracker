<?php

use App\Http\Controllers\FoodTrackController;
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

Route::view('/','index')->name('reports.index');

Route::post('/reports', [FoodTrackController::class, 'store'])->name('reports.store');
Route::get('/show', [FoodTrackController::class, 'show'])->name('reports.show');
Route::get('/weekReport', [FoodTrackController::class, 'getWeekReport'])->name('reports.weekReport');
