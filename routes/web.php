<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mision', function () {
    return view('mission');
})->name('mision');

Route::prefix('terreno')->group(function () {
    Route::get('/registrar', [PropertyController::class, 'register'])->name('property.register');
    Route::get('/buscar', [PropertyController::class, 'search'])->name('property.search');
});
