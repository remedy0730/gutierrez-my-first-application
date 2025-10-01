<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Predefined job-related tags
        $tags = [
            'Remote',
            'On-Site',
            'Full-Time',
            'Part-Time',
            'Contract',
            'Internship',
            'Entry-Level',
            'Senior',
            'Tech',
            'Management',
        ];

        return [
            'name' => $this->faker->unique()->randomElement($tags),
        ];
    }
}
