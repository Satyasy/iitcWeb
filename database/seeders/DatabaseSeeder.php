<?php

namespace Database\Seeders;

use App\Models\User;
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
            'username' => 'revanosatya',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'nabilaraissa',
            'email' => 'kurator@gmail.com',
            'role' => 'kurator',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'reycannavaro',
            'email' => 'publik@gmail.com',
            'role' => 'publik',
            'password' => Hash::make('password'),
        ]);
    }
}