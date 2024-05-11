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
                'kodebarang' => '224',
                'namabarang' => 'Jeruk',
                'deskripsi' => 'Buah yang berwarna orange',
                'harga' => 2000,
                'satuan_id' => 1
            ],
            [
                'kodebarang' => '544',
                'namabarang' => 'Tomat',
                'deskripsi' => 'Kadang buah, kadang sayuran',
                'harga' => 4000,
                'satuan_id' => 2
            ],
            [
                'kodebarang' => '332',
                'namabarang' => 'Kacang',
                'deskripsi' => 'Jenis Biji Bijian',
                'harga' => 3500,
                'satuan_id' => 3
            ],
        ]);
    }
}
