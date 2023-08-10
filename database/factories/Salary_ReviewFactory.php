<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Salary_ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employ_id' => Employee::inRandomOrder()->first()->id,
            'last_rewiew'=>date('y-m-d'),
            'comimg_rewiew'=>date('y-m-d')
        ];
    }
}
