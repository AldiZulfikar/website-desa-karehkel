<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jumlahPenduduk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2020',
            'lk' => 50,
            'pr' => 50,
            'jumlah' => 100,
            'jumlah_kk' => 200,
            'laju_pertumbuhan' => 80,
            'user_id' => 1
        ]);
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2021',
            'lk' => 30,
            'pr' => 70,
            'jumlah' => 100,
            'jumlah_kk' => 200,
            'laju_pertumbuhan' => 60,
            'user_id' => 1
        ]);
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2022',
            'lk' => 40,
            'pr' => 60,
            'jumlah' => 100,
            'jumlah_kk' => 200,
            'laju_pertumbuhan' => 70,
            'user_id' => 1
        ]);
    }
}
