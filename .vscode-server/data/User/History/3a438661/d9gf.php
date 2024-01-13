<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;

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


Route::get('/cars/create', [CarController::class, 'create'] )->name('cars.create');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/cars/{id}', [CarController::class, 'details'])->name('cars.details');

Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');

Route::get('/cars', [CarController::class, 'store'])->name('cars.store');