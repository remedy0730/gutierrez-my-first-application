<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 5 Employers
        $employers = Employer::factory(5)->create();

        // Create 10 Tags
        $tags = Tag::factory(10)->create();

        // Create 20 Jobs and randomly assign employers + tags
        Job::factory(20)->make()->each(function ($job) use ($employers, $tags) {
            // Random employer
            $job->employer_id = $employers->random()->id;
            $job->save();

            // Attach 1–3 random tags
            $job->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
