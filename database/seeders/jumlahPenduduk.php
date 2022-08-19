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
            'tahun' => '2017',
            'lk' => 5820,
            'pr' => 5955,
            'jumlah' => 11775,
            'jumlah_kk' => 3900,
            'laju_pertumbuhan' => 45,
            'user_id' => 1
        ]);
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2018',
            'lk' => 6319,
            'pr' => 6464,
            'jumlah' => 12783,
            'jumlah_kk' => 4101,
            'laju_pertumbuhan' => 25,
            'user_id' => 1
        ]);
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2019',
            'lk' => 6373,
            'pr' => 6575,
            'jumlah' => 12948,
            'jumlah_kk' => 4234,
            'laju_pertumbuhan' => 17,
            'user_id' => 1
        ]);
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2020',
            'lk' => 6892,
            'pr' => 6155,
            'jumlah' => 13007,
            'jumlah_kk' => 8743,
            'laju_pertumbuhan' => 20,
            'user_id' => 1
        ]);
        DB::table('jumlah_penduduks')->insert([
            'tahun' => '2021',
            'lk' => 7056,
            'pr' => 6456,
            'jumlah' => 13512,
            'jumlah_kk' => 9756,
            'laju_pertumbuhan' => 35,
            'user_id' => 1
        ]);
    }
}
