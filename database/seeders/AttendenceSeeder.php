<?php

namespace Database\Seeders;

use App\Models\Attendence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendence::Create([

            'employ_id'=>'20',
            'date'=>'1994-3-23',
            'arrival_time'=>'02:33:07'
        ]);
    }
}
