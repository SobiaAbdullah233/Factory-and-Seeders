<?php

namespace Database\Seeders;
use App\Models\Award;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   Award::create([
        'title'=>'Good Performance',
        'amount'=>'100000',
        'date'=>'2022-12-12',
        'employ_id'=>'1'

    ]);

    }
}
