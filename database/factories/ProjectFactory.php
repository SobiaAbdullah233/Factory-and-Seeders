<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $type=[
        'Hourly',
        'fixed Price'
    ];
        return [
            'client_id'=>Client::inRandomOrder()->first()->id,
            'title'=>fake()->sentence,
            'type'=>$type[rand(0, count($type) - 1)]
        ];
    }
}
