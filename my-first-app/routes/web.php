<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; // Import the newly created Job Model

// Homepage
Route::get('/', function () {
    return view('home');
});

// All Jobs
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all() // Use the static all() method from the Job Model
    ]);
});

// Single Job - using a Route Wildcard
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id) // Use the static find() method from the Job Model
    ]);
});
