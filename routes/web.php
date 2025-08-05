<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portofolio');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
