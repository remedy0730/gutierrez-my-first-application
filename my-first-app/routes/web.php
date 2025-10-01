<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; // Import the Job Model

// Homepage
Route::get('/', function () {
    return view('home');
});

// All Jobs (index) with eager loading + pagination
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with(['employer', 'tags'])->paginate(10)
    ]);
});

// Single Job (show)
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Show Create Job Form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store New Job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1 // hard-coded for now
    ]);

    return redirect('/jobs');
});

// Show Edit Job Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update Job
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});
