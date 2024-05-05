<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodebarang' => '#332',
                'namabarang' => 'Jeruk',
                'deskripsi' => 'Berbentuk Bulat',
                'harga' => 2000,
                'satuan_id' => 1
            ],
            [
                'kodebarang' => '#222',
                'namabarang' => 'Tomat',
                'deskripsi' => 'Kadang Buah, Kadang Sayur',
                'harga' => 5000,
                'satuan_id' => 2
            ],
            [
                'kodebarang' => '#112',
                'namabarang' => 'Kacang',
                'deskripsi' => 'Biji Bijian yang bisa digoreng',
                'harga' => 4500,
                'satuan_id' => 3
            ],
        ]);
    }
}
