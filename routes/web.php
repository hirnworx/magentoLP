<?php

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


Route::get('/{city?}',[App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::post('/quote/insertdata', [App\Http\Controllers\UserController::class, 'store'])->name('storequotdata');
Route::get('date/datenschutz/{city?}',[App\Http\Controllers\UserController::class, 'datenschutz'])->name('datenschutz');
Route::get('imp/impressum/{city?}',[App\Http\Controllers\UserController::class, 'impressum'])->name('impressum');
