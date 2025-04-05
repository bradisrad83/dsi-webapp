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
        User::factory()->create([
            'first_name' => 'Brad', 
            'last_name' => 'Goldsmith',
            'nickname' => 'Stork Slayer',
            'email' => 'brad.m.goldsmith@gmail.com', 
            'phone_number' => '9183464253',
            'role' => 'superadmin',
            'password' => bcrypt('dsi-2025'),
        ]);
    }
}
