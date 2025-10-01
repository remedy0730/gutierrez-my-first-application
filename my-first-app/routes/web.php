<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; // Import the Job Model

// Homepage
Route::get('/', function () {
    return view('home');
});

// All Jobs (with eager loading + pagination)
Route::get('/jobs', function () {
    return view('jobs', [
        // Eager load employer + tags, paginate 10 per page
        'jobs' => Job::with(['employer', 'tags'])->paginate(10)
    ]);
});

// Single Job - using a Route Wildcard (with eager loading)
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::with(['employer', 'tags'])->findOrFail($id)
    ]);
});
