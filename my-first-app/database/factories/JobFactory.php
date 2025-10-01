<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(), // random job title
            'salary' => $this->faker->randomElement([
                '$50,000 USD',
                '$90,000 USD',
                '$150,000 USD',
            ]),
            'employer_id' => Employer::factory(), // create an employer for each job
        ];
    }
}
