<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Budaya;
use App\Models\Artikel;
use App\Models\Comment;
use App\Models\Lokasi; // Tambahkan model Lokasi
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat data pengguna dan simpan ke variabel terpisah
        $adminUser = User::create([
            'name' => 'revanosatya',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        $kuratorUser = User::create([
            'name' => 'nabilaraissa',
            'email' => 'kurator@gmail.com',
            'role' => 'kurator',
            'password' => Hash::make('password'),
        ]);

        $publikUser = User::create([
            'name' => 'reycannavaro',
            'email' => 'publik@gmail.com',
            'role' => 'publik',
            'password' => Hash::make('password'),
        ]);

        // 2. Buat data Lokasi terlebih dahulu
        $lokasiMalang = Lokasi::create([
            'nama' => 'Malang',
            'alamat' => 'Jawa Timur',
        ]);

        // 3. Buat data Budaya dengan relasi ke Lokasi
        $budayaBatik = Budaya::create([
            'name' => 'Batik',
            'deskripsi' => 'Batik khas Indonesia',
            'jenis' => 'Pakaian',
            'asal_daerah' => $lokasiMalang->lokasi_id, // Gunakan ID dari lokasi yang baru dibuat
            'status' => 'aktif',
        ]);

        // 4. Buat data Artikel dengan relasi ke User (kurator) dan Budaya
        $artikelBatik = Artikel::create([
            'title' => 'Sejarah Batik',
            'content' => 'Batik sudah ada sejak lama...',
            'topic' => 'Sejarah',
            'user_id' => $kuratorUser->user_id, // Relasi ke user kurator
            'budaya_id' => $budayaBatik->budaya_id, // Relasi ke budaya batik
        ]);

        // 5. Buat data Komentar dengan relasi ke User (publik) dan Artikel
        Comment::create([
            'comment' => 'Keren banget artikelnya!',
            'user_id' => $publikUser->user_id, // Relasi ke user publik
            'artikel_id' => $artikelBatik->artikel_id, // Relasi ke artikel batik
        ]);
    }
}