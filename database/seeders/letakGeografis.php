<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class letakGeografis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('letak_geografis')->insert([
            'batas' => 'Sebelah Selatan',
            'desa' => 'Cibungbulang',
            'kecamatan' => 'Cibungbulang',
            'kabupaten' => 'Bogor',
            'user_id' => 1
        ]);
        DB::table('letak_geografis')->insert([
            'batas' => 'Sebelah Barat',
            'desa' => 'Cibungbulang',
            'kecamatan' => 'Cibungbulang',
            'kabupaten' => 'Bogor',
            'user_id' => 1
        ]);
        DB::table('letak_geografis')->insert([
            'batas' => 'Sebelah Timur',
            'desa' => 'Cibungbulang',
            'kecamatan' => 'Cibungbulang',
            'kabupaten' => 'Bogor',
            'user_id' => 1
        ]);
        DB::table('letak_geografis')->insert([
            'batas' => 'Sebelah Utara',
            'desa' => 'Cibungbulang',
            'kecamatan' => 'Cibungbulang',
            'kabupaten' => 'Bogor',
            'user_id' => 1
        ]);
    }
}
