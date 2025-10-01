<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Display all jobs (with eager loading + pagination)
    public function index()
    {
        $jobs = Job::with(['employer', 'tags'])->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Show form to create a new job
    public function create()
    {
        return view('jobs.create');
    }

    // Store new job in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1 // hard-coded for now
        ]);

        return redirect('/jobs');
    }

    // Display a single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show form to edit a job
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update an existing job
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => $request->title,
            'salary' => $request->salary,
        ]);

        return redirect('/jobs/' . $job->id);
    }

    // Delete a job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
