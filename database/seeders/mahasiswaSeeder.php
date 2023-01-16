<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mahasiswa::create([
            'id' => 1,
            'nim' => 'feb010101',
            'nama' => 'Febry Antony Santoso',
            'alamat' => 'Jl. Sudirman No 98',
            'jurusan' => 'Ekonomi dan Bisnis',
            'contact' => '087702029102',
            'ipk' => 3.8,
        ]);

        mahasiswa::create([
            'id' => 2,
            'nim' => 'feb020202',
            'nama' => 'Karina Kalina',
            'alamat' => 'Jl. Sudirman No 98',
            'jurusan' => 'Ekonomi dan Bisnis',
            'contact' => '087702029103',
            'ipk' => 3,
        ]);
    }
}