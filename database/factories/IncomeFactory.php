<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id'=>Project::inRandomOrder()->first()->id,
            'amount'=>fake()->numberBetween(1000000,10000000),
            'date'=>fake()->date('y-m-d'),
            'recived_by'=>Employee::inRandomOrder()->first()->id
        ];
    }
}
