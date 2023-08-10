<?php

namespace Database\Seeders;

use App\Models\Employee;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Employee::Create([
        'name' => 'waheed',
        'email' => 'email@gmail.com',
        'designation' => 'developer',
        'salary' => '10000',
        'address' => 'lahore',
        'joining_date' => '2022-1-22',
        // 'phone' => '030112345678'

    ]);
    }
}
