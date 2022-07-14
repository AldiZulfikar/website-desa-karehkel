<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agendaDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agenda_desas')->insert([
            'nama_agenda' => '17-08-2022',
            'deskripsi' => 'Acara tahunan perayaan 17 agustusan',
            'is_active' => true,
            'user_id' => 1
        ]);
    }
}
