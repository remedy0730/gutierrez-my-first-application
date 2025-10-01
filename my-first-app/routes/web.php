<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Homepage
Route::get('/', function () {
    return view('home');
});

// Job CRUD Routes using resourceful routing
Route::resource('jobs', JobController::class);
