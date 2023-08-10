<?php

namespace Database\Seeders;
Use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::Create([
            'client_id'=>'23',
            'title'=>'Cooking Website',
            'type'=>'Fixed'
        ]);
    }
}
