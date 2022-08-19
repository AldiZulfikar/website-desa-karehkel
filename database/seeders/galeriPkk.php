<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class galeriPkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeripkks')->insert([
            'gambar_galeri' => '',
            'judul' => 'posyandu Dahlia 3',
            'pemilik'=> 'Ros',
            'ig' => '-',
            'youtube' => '-',
            'is_active' => 1,
            'user_id' => 1
        ]);
        DB::table('galeripkks')->insert([
            'gambar_galeri' => '',
            'judul' => 'posyandu Dahlia 7',
            'pemilik'=> 'Ros',
            'ig' => '-',
            'youtube' => '-',
            'is_active' => 1,
            'user_id' => 1
        ]);
        DB::table('galeripkks')->insert([
            'gambar_galeri' => '',
            'judul' => 'posyandu Dahlia 8',
            'pemilik'=> 'Ros',
            'ig' => '-',
            'youtube' => '-',
            'is_active' => 1,
            'user_id' => 1
        ]);
    }
}
