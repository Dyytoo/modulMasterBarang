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
                'kode' => 'A',
                'nama' => 'Buah',
                'deskripsi' => 'Buah Buahan'
            ],
            [
                'kode' => 'B',
                'nama' => 'Sayuran',
                'deskripsi' => 'Sayur Sayuran'
            ],
            [
                'kode' => 'C',
                'nama' => 'Biji Bijian',
                'deskripsi' => 'Biji Bijian'
            ],
        ]);
    }
}
