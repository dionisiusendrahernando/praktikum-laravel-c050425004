<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Mahasiswa::factory()->count(50)->create();
        
        Mahasiswa::create([
            'nim' => '2024010001',
            'nama' => 'Ahmad Fauzi',
            'email' => 'ahmad@kampus.ac.id',
            'prodi' => 'Teknik Informatika',
            'semester' => '3',
        ]);

        Mahasiswa::create([
            'nim' => '2024010002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@kampus.ac.id',
            'prodi' => 'Sistem Informasi',
            'semester' => '1',
        ]);
    }
}