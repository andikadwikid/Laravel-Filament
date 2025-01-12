<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'dwiki',
            'email' => 'dwiki@mail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        collect([
            ['name' => 'IT', 'active' => true],
            ['name' => 'HR', 'active' => true],
            ['name' => 'Sales', 'active' => true],
            ['name' => 'Marketing', 'active' => true],
        ])->each(fn($item) => Department::create($item));

        collect([
            ['name' => 'Software Engineer'],
            ['name' => 'HR Manager'],
            ['name' => 'Sales Manager'],
            ['name' => 'Marketing Manager'],
        ])->each(fn($item) => Position::create($item));

        Employee::factory(10)->create();
    }
}
