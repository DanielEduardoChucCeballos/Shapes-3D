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
/* Route::get('/services/diseños-personalizados', [App\Http\Controllers\DisePersonalizadosController::class, 'index'])->name('diseños-personalizados'); */
Route::get('/services/diseños-personalizados', [App\Http\Controllers\DisePersonalizadosController::class, 'index'])->name('diseños');
Route::post('/services/diseños-personalizados/cotizado', [App\Http\Controllers\DisePersonalizadosController::class, 'calculate'])->name('diseñosform');
Route::get('/services/diseños-personalizados/compra/{id}', [App\Http\Controllers\CompraModelController::class, 'compra'])->name('compra');





Route::get('/filamentos',[App\Http\Controllers\HomeController::class,'filamentolist'])->name('filamentolist');
Route::get('/Prueba', function () {
    return view('prototipe');
});
