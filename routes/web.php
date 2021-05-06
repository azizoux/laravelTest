<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages/about');
})->name('about');
