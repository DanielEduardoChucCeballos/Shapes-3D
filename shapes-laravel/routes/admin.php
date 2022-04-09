<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\RoleController;


Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');


Route::view('prospect', 'livewire.prospects.index')->middleware('auth','can:adminDashboard');
Route::view('detail', 'livewire.details.index')->middleware('auth','can:adminDashboard');
Route::view('finish', 'livewire.finishs.index')->middleware('auth','can:adminDashboard');
Route::view('filling', 'livewire.fillings.index')->middleware('auth','can:adminDashboard');
Route::view('filament_color', 'livewire.filament-colors.index')->middleware('auth','can:adminDashboard');
Route::view('filament', 'livewire.filaments.index')->middleware('auth','can:adminDashboard');
Route::view('color', 'livewire.colors.index')->middleware('auth','can:adminDashboard');
Route::view('description_model', 'livewire.description-models.index')->middleware('auth','can:adminDashboard');
Route::view('personal_information', 'livewire.personal-informations.index')->middleware('auth','can:adminDashboard');


Route::resource('users',UserController::class)->only(['index','edit','update'])->names('admin.users');


Route::resource('roles',RoleController::class)->names('admin.roles');
