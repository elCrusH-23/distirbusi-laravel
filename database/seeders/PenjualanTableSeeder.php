<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenjualanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('penjualan')->insert([
            'jumlah_barang'=>50,
            'harga_satuan'=>1000,
        ]);
        DB::table('penjualan')->insert([
            'jumlah_barang'=>60,
            'harga_satuan'=>1500,
        ]);
    }
}
