<?php

namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::Create([

            'name'=>'Sobia Abdullah',
            'source'=>'fiver',
            'country'=>'Pakistan',
             'email'=>'sobiaabdullah233@gmail.com'
        ]);
    }
}
