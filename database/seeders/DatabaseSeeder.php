<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Budaya;
use App\Models\Artikel;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'revanosatya',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        $user = User::create([
            'username' => 'nabilaraissa',
            'email' => 'kurator@gmail.com',
            'role' => 'kurator',
            'password' => Hash::make('password'),
        ]);

        $user = User::create([
            'username' => 'reycannavaro',
            'email' => 'publik@gmail.com',
            'role' => 'publik',
            'password' => Hash::make('password'),
        ]);
        $budaya = Budaya::create([
            'name' => 'Batik',
            'user_id' => $user->user_id,
            'deskripsi' => 'Batik khas Indonesia',
            'jenis' => 'Benda',
            'asal_daerah' => 'Malang',
        ]);

        $artikel = Artikel::create([
            'title' => 'Sejarah Batik',
            'content' => 'Batik sudah ada sejak lama...',
            'user_id' => $user->user_id,
            'topic' => 'Sejarah',
            'budaya_id' => $budaya->budaya_id,
        ]);

        Comment::create([
            'comment' => 'Keren banget artikelnya!',
            'user_id' => $user->user_id,
            'artikel_id' => $artikel->artikel_id,
        ]);
    }
}