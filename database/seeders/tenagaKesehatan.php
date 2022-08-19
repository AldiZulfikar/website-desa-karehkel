<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tenagaKesehatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Medis',
            'tenaga_kesehatan' => 'Dokter Umum',
            'jumlah' => 3,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Medis',
            'tenaga_kesehatan' => 'Dokter Spesialis',
            'jumlah' => 0,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Perawat',
            'tenaga_kesehatan' => 'Bidan',
            'jumlah' => 6,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Perawat',
            'tenaga_kesehatan' => 'Perawat',
            'jumlah' => 6,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Partisipasi Masyarakat',
            'tenaga_kesehatan' => 'Dukun Bayi',
            'jumlah' => 0,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Partisipasi Masyarakat',
            'tenaga_kesehatan' => 'Posyandu',
            'jumlah' => 13,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Partisipasi Masyarakat',
            'tenaga_kesehatan' => 'Poskesdes',
            'jumlah' => 1,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Partisipasi Masyarakat',
            'tenaga_kesehatan' => 'Desa Siaga',
            'jumlah' => 1,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Partisipasi Masyarakat',
            'tenaga_kesehatan' => 'Kader',
            'jumlah' => 85,
            'user_id' => 1
        ]);
    }
}
