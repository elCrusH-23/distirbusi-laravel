<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menggunakan fungsi DB::table untuk memasukkan data ke dalam tabel products
        DB::table('pelangan')->insert([
            'name' => 'Piyono',
            'kontak' => '100',
            'asal' => 'Semarang',
        ]);

        DB::table('pelangan')->insert([
            'name' => 'Projo',
            'kontak' => '150',
            'asal' => 'solo',
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}