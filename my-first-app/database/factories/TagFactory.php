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
        $tagList = [
            'Full-Time',
            'Part-Time',
            'Remote',
            'Onsite',
            'Contract',
            'Internship',
            'Tech',
            'Marketing',
            'Design',
            'Management'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($tagList),
        ];
    }
}
