<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => 'A',
                'nama' => 'Buah',
                'deskripsi' => 'Buah Buahan'
            ],
            [
                'code' => 'B',
                'nama' => 'Sayur',
                'deskripsi' => 'Sayur Sayuran'
            ],
            [
                'code' => 'C',
                'nama' => 'Biji',
                'deskripsi' => 'Biji Bijian'
            ],
        ]);
    }
}
