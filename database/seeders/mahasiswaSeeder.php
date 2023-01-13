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
            'nim' => '0408',
            'nama' => 'joni',
            'alamat' => 'kendangsari',
            
        ]);
    }
}
