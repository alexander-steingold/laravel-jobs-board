<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(300)->create();
        $users = User::all()->shuffle();

        for ($i = 0; $i < 20; $i++) {
            Employee::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employees = Employee::all();
        for ($i = 0; $i < 100; $i++) {
            Job::factory()->create([
                'employee_id' => $employees->random()->id
            ]);
        }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
