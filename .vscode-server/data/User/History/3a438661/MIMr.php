<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function(){
    return view();
})->name('cars.index');

Route::get('/cars/create', function(){
    return view();
})->name('cars.create');

Route::get('/cars/{id}', function($id){
    return view();
})->name('cars.details');

Route::get('/cars/{id}/edit', function(){
    return view();
})->name('cars.edit');

Route::get('/manufacturers', function(){
    return view();
})->name('manufacturers.index');