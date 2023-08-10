<?php

namespace Database\Factories;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salarie>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employ_id'=>Employee::inRandomOrder()->first()->id,
            'salary' => fake()->numberBetween(10000, 90000),
            'salary_date'=>fake()->date('y-m-d')
        ];
    }
}
