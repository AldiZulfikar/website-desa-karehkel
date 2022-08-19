<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pokja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA I',
            'program' => '
                1. Pemberdayaan dan Pengamalan Pancasila',
            'kegiatan' => '
                1. Pengajian Rutin
                2. Sosialisasi pencegahan pernikahan anak melalui PAAR dengan penuh Cinta Kasih Sayang dalam Keluarga
                3. Workshop remaja bebas narkoba (Krisna)
                4. Seminar tentang hak-hak anak
                5. Orientasi Pembinaan Kesadaran Bela Negara (PKBN)
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA I',
            'program' => '
                2. Gotong Royong',
            'kegiatan' => '
                1. Penguatan Lansia
                2. Lomba Asmaul Husna dan Sholawat
                3. Lomba Kegiatan Buka Bersama
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA III',
            'program' => '
                1. Pangan',
            'kegiatan' => '
                1. Pembentukan kampung Aku Hatinya PKK
                2. Bimbingan Teknis Budikdamber
                3. Sosialisasi dan Bimtek B2SA
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA III',
            'program' => '
                2. Sandang',
            'kegiatan' => '
                1. Sosialisasi dan pelatih membatik (Khas Kabupaten Bogor)
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA III',
            'program' => '
                3. Perumahan dan Tatalaksana Rumah Tangga',
            'kegiatan' => '
                1. Sosialisasi rumah sehat layak Huni
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA IV',
            'program' => '
                1. Kesehatan',
            'kegiatan' => '
                1. Pembinaan perilaku hidup bersih dan sehat
                2. Pembinaan peran serta masyarakat dalam upaya penurunan angka kematian ibu bayi dan balita
                3. Sosialisasi dan peran aktif dalam mewujudkan peningkatan kemampuan keluarga yang sadar sehat dan bergizi
                4. Mendukung program pencegahan dan deteksi dini kanker pada perempuan
                5. Advokasi pelaksanaan imunisasi dan pencegahan penyakit menular maupun tidak menular serta sosialisasi asuhan mandiri dalam keluarga
                6. Partisipasi dalam penanganan dan pencegahan penularan Covid-19
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA IV',
            'program' => '
                2. Kelestarian Lingkungan Hidup',
            'kegiatan' => '
                1. Gerakan sejuta tanaman Pelindung
                2. Pembinaan keluarga sadar lingkungan hidup
                3. Pelatihan pengelolaan sampah rumah tangga terpadu
                4. Pelatihan keluarga tanggap bencana
                ',
            'user_id' => 1
        ]);
        DB::table('pokjas')->insert([
            'kelompok' => 'POKJA IV',
            'program' => '
                3. Perencanaan Sehat',
            'kegiatan' => '
                1. Meningkatkan penyuluhan keluarga bencana menuju keluarga berkualitas
                2. Melakukan perencanaan keluarga yang baik untuk kehidupan keluarga sehat
                ',
            'user_id' => 1
        ]);
    }
}
