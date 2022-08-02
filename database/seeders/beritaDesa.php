<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class beritaDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita_desas')->insert([
            'judul' => '1 Muharam Sangat Meriah',
            'slug' => '1-muharam-sangat-meriah',
            'konten' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus necessitatibus nostrum earum aperiam totam eaque, modi aliquid a fugiat eligendi officia. At soluta iusto numquam corrupti, illum eius temporibus placeat.',
            'gambar_berita' => '',
            'is_active' => true,
            'views' => 0,
            'user_id' => 1
        ]);
        DB::table('berita_desas')->insert([
            'judul' => 'Hari Lahir Pancasila',
            'slug' => 'hari-lahir-pancasila',
            'konten' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus necessitatibus nostrum earum aperiam totam eaque, modi aliquid a fugiat eligendi officia. At soluta iusto numquam corrupti, illum eius temporibus placeat.',
            'gambar_berita' => '',
            'is_active' => true,
            'views' => 0,
            'user_id' => 1
        ]);
        DB::table('berita_desas')->insert([
            'judul' => 'Perayaan Hari Kartini',
            'slug' => 'perayaan-hari-kartini',
            'konten' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus necessitatibus nostrum earum aperiam totam eaque, modi aliquid a fugiat eligendi officia. At soluta iusto numquam corrupti, illum eius temporibus placeat.',
            'gambar_berita' => '',
            'is_active' => true,
            'views' => 0,
            'user_id' => 1
        ]);
    }
}
