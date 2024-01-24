<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anggota;
use App\Models\Regu;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('tes')
        ]);

        User::create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => bcrypt('tes2')
        ]);

        Regu::create([
            'nama' => 'SMA RYAN HADI',
            'soal' => 0,
            'skor' => 0,
            'users_id' => 1
        ]);

        Regu::create([
            'nama' => 'SMA RYAN HADI 2',
            'soal' => 0,
            'skor' => 0,
            'users_id' => 2
        ]);

        Anggota::create([
            'nama' => 'Ryan H',
            'nisn' => '1111',
            'regus_id' => 1
        ]);

        Anggota::create([
            'nama' => 'Ryan H 2',
            'nisn' => '2222',
            'regus_id' => 1
        ]);

        Anggota::create([
            'nama' => 'H Ryan',
            'nisn' => '3333',
            'regus_id' => 2
        ]);

        Anggota::create([
            'nama' => 'H Ryan 2',
            'nisn' => '4444',
            'regus_id' => 2
        ]);
    }
}
