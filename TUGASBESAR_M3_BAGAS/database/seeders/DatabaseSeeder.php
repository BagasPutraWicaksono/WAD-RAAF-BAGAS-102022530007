<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => 'Pemrograman Web dengan Laravel',
                'isbn' => '978-602-03-1234-5',
                'pengarang' => 'Bagas Putra',
                'tahun_terbit' => 2025,
                'kategori' => 'Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Sistem Informasi Manajemen',
                'isbn' => '978-602-03-5678-9',
                'pengarang' => 'Tim Akademik',
                'tahun_terbit' => 2024,
                'kategori' => 'Pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}