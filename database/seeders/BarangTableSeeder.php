<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('barang')->insert([
            'nama_barang'=>'Product 1',
            'price'=>1000,
            'stock'=>50,
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Product 2',
            'price'=>1500,
            'stock'=>30,
        ]);
    }
}
