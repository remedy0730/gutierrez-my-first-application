<?php

namespace App\Models;

class Job
{
    /**
     * Returns all hardcoded job listings.
     * @return array
     */
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ],
        ];
    }

    /**
     * Finds a single job by its ID. Aborts with a 404 if not found.
     * @param int $id
     * @return array
     */
    public static function find($id)
    {
        // Use Illuminate\Support\Arr::first to find the job by ID
        $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            // Abort if the job is not found
            abort(404);
        }
        return $job;
    }
}
