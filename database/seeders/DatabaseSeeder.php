<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'admin@peso-jobs.byandev.com',
            'role' => 'Admin',
            'password' => Hash::make('9F)b4Hny£2'),
            'age' => 30,
            'email_verified_at' => now()
        ]);
    }
}
