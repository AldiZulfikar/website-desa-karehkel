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
            'jenis' => 'Dokter Umum',
            'tenaga_kesehatan' => 'Dokter',
            'jumlah' => 100,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Dokter Gigi',
            'tenaga_kesehatan' => 'Dokter Gigi',
            'jumlah' => 100,
            'user_id' => 1
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'jenis' => 'Persalinan',
            'tenaga_kesehatan' => 'Bidan',
            'jumlah' => 100,
            'user_id' => 1
        ]);
    }
}
