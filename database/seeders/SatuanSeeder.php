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
                'name' => 'Buah',
                'description' => 'Sejenis Buah Buahan'
            ],
            [
                'code' => 'B',
                'name' => 'Sayuran',
                'description' => 'Sejenis Sayur Sayuran'
            ],
            [
                'code' => 'C',
                'name' => 'Biji',
                'description' => 'Sejenis Biji Bijian'
            ],
        ]);
    }
}
