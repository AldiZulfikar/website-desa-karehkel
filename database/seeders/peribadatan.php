<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peribadatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peribadatans')->insert([
            'tempat_ibadah' => 'Masjid',
            'jumlah' => 100,
            'user_id' => 1
        ]);
        DB::table('peribadatans')->insert([
            'tempat_ibadah' => 'Majelis',
            'jumlah' => 100,
            'user_id' => 1
        ]);
        DB::table('peribadatans')->insert([
            'tempat_ibadah' => 'Mushola',
            'jumlah' => 100,
            'user_id' => 1
        ]);
    }
}
