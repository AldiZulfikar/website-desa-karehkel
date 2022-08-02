<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataPendidikanDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_pendidikan_desas')->insert([
            'nama_sekolah' => 'SDN Karehkel 01',
            'jumlah_guru' => 15,
            'jumlah_murid' => 380,
            'lokasi' => 'Karehkel',
            'user_id' => 1
        ]);
        DB::table('data_pendidikan_desas')->insert([
            'nama_sekolah' => 'SDN Karehkel 02',
            'jumlah_guru' => 15,
            'jumlah_murid' => 400,
            'lokasi' => 'Karehkel',
            'user_id' => 1
        ]);
        DB::table('data_pendidikan_desas')->insert([
            'nama_sekolah' => 'SDN Karehkel 03',
            'jumlah_guru' => 15,
            'jumlah_murid' => 380,
            'lokasi' => 'Karehkel',
            'user_id' => 1
        ]);
        DB::table('data_pendidikan_desas')->insert([
            'nama_sekolah' => 'SDN Karehkel 04',
            'jumlah_guru' => 15,
            'jumlah_murid' => 350,
            'lokasi' => 'Karehkel',
            'user_id' => 1
        ]);

    }
}
