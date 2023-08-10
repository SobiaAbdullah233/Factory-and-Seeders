<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $designaitons = [
            'PHP Laravel Devloper',
            'Javascirpt Developer',
            'Content writter',
            'SEO Expert',
            'Frontend Developer',
        ];
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'salary' => fake()->numberBetween(10000, 90000),
            'address' => fake()->streetAddress(),
            'designation' =>  $designaitons[rand(0, count($designaitons) - 1)],
            'joining_date' => fake()->date('Y-m-d')
        ];
    }
}
