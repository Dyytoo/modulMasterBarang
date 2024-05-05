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
                'kodebarang' => '225',
                'namabarang' => 'Jeruk',
                'deskripsi' => 'Buah yang berbentuk bulat',
                'harga' => 3000,
                'satuan_id' => 1
            ],
            [
                'kodebarang' => '432',
                'namabarang' => 'Tomat',
                'deskripsi' => 'Kadang buah, kadang sayuran',
                'harga' => 4300,
                'satuan_id' => 2
            ],
            [
                'kodebarang' => '544',
                'namabarang' => 'Kacang',
                'deskripsi' => 'Biji yang bisa di goreng, bakar, dan kukus',
                'harga' => 2500,
                'satuan_id' => 3
            ],
        ]);
    }
}
