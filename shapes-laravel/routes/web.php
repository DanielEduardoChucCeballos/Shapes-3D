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
    return view('welcome');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'servicios'])->name('services');
Route::get('/services/diseños-personalizados', [App\Http\Controllers\DisePersonalizadosController::class, 'index'])->name('diseños-personalizados');

Route::get('/Prueba', function () {
    return view('prototipe');
});
