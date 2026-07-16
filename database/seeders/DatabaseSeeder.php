<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
                'role' => '2',
                'email_verified_at' => now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@meluna.com'],
            [
                'name' => 'Admin Meluna',
                'password' => bcrypt('password123'),
                'role' => '0',
                'email_verified_at' => now(),
            ]
        );

         User::firstOrCreate(
            ['email' => 'operator@meluna.com'],
            [
                'name' => 'Operator Meluna',
                'password' => bcrypt('password123'),
                'role' => '1',
                'email_verified_at' => now(),
            ]
        );

     
    }
}
