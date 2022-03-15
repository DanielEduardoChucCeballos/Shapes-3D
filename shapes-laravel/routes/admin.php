<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');


Route::view('prospect', 'livewire.prospects.index')->middleware('auth');
Route::view('detail', 'livewire.details.index')->middleware('auth');
Route::view('finish', 'livewire.finishs.index')->middleware('auth');
Route::view('filling', 'livewire.fillings.index')->middleware('auth');
Route::view('filament_color', 'livewire.filament-colors.index')->middleware('auth');
Route::view('filament', 'livewire.filaments.index')->middleware('auth');
Route::view('color', 'livewire.colors.index')->middleware('auth');
Route::view('description_model', 'livewire.description-models.index')->middleware('auth');
Route::view('personal_information', 'livewire.personal-informations.index')->middleware('auth');