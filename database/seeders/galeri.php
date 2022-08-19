<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class galeri extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeris')->insert([
            'gambar_galeri' => '',
            'judul' => 'Keripik Singkong',
            'pemilik'=> 'Kepala Desa',
            'ig' => '-',
            'toko' => '-',
            'is_active' => 1,
            'user_id' => 1
        ]);
        DB::table('galeris')->insert([
            'gambar_galeri' => '',
            'judul' => 'Sepatu',
            'pemilik'=> 'Ahmad ',
            'ig' => '-',
            'toko' => '-',
            'is_active' => 1,
            'user_id' => 1
        ]);
        DB::table('galeris')->insert([
            'gambar_galeri' => '',
            'judul' => 'Rengginang',
            'pemilik'=> 'Sekdes',
            'ig' => '-',
            'toko' => '-',
            'is_active' => 1,
            'user_id' => 1
        ]);
    }
}
