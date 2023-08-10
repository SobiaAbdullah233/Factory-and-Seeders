<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Award>
 */
class AwardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title' =>fake()->sentence,
            'amount' =>fake()->randomFloat(2, 0, 10000),
            'date' =>fake()->dateTimeThisYear()->format('Y-m-d H:i:s'),
            'employ_id' => Employee::inRandomOrder()->first()->id,
        ];
    }
}
