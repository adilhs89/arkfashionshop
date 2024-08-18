<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            'created_by' => 1,
            'user_type' => 'superadmin',
            'is_active' => 1,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'created_by' => 1,
            'user_type' => 'admin',
            'is_active' => 1,
        ]);

        User::factory()->create([
            'name' => 'Client',
            'username' => 'client',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
            'created_by' => 1,
            'user_type' => 'client',
            'is_active' => 1,
        ]);

        // User::factory(2)->create();
    }
}
