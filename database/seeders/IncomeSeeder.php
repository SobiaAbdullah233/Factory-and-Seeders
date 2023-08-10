<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Income::Create([
            'project_id'=>'10',
            'amount'=>'500000',
            'date'=>'2023-12-21',
            'recived_by'=>'1'
        ]);
    }
}
