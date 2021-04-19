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

Route::get('/', function () {
    return view('landing_page');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/crops', function () {
    return view('crops');
})->name('crops');

Route::middleware(['auth:sanctum', 'verified'])->get('/livestock', function () {
    return view('livestock');
})->name('livestock');

Route::middleware(['auth:sanctum', 'verified'])->get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::middleware(['auth:sanctum', 'verified'])->get('/market', function () {
    return view('market');
})->name('market');

Route::middleware(['auth:sanctum', 'verified'])->get('/weather_api', function () {
    return view('weather_api');
})->name('weather_api');
