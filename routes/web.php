<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('app.contato');
})->name('contact');

Route::get('/', function () {
    return view('app.home');
})->name('home');

Route::post('/contato', [ContactController::class, 'submitForm'])->name('contato.submit');

Route::get('/about-us', function () {
    return view('app.about-us');
})->name('about-us');

