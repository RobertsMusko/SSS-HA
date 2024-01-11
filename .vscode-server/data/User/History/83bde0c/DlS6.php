<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('contacts/create', function(){
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function($id){
    //TO PASS DATA TO VIEWS AS ASSOCIATIVE ARRAYS
    $contact = App\Models\Contact::find($id);
    return view('contacts.show', compact('contact'));
})->name('contacts.show');
