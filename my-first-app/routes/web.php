<?php

use Illuminate\Support\Facades\Route;

// Part 1, Step 1: Define the three application routes.

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
