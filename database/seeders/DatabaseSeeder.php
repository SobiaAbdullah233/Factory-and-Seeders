<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  $this->call(EmployeeSeeder::class);
        //  $this->call(AttendenceSeeder::class);
        //  $this->call(AwardSeeder::class);
        //  $this->call(CategorieSeeder::class);
        //  $this->call(ClientSeeder::class);
        // $this->call(ExpenseSeeder::class);
        // $this->call(IncomeSeeder::class);
        $this->call(ProjectSeeder::class);

        //   \App\Models\Employee::factory(10)->create();
        //   \App\Models\Award::factory(10)->create();
        //   \App\Models\Salary::factory(10)->create();
        //   \App\Models\Attendence::factory(10)->create();
        //   \App\Models\Categorie::factory(10)->create();
        //   \App\Models\Client::factory(10)->create();
        //   \App\Models\Expense::factory(10)->create();
        //   \App\Models\Project::factory(10)->create();
        //   \App\Models\Salary_Review::factory(10)->create();
        //   \App\Models\Income::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
