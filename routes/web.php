<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('app.about-us');
})->name('about-us');


Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'contact']);