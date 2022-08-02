<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class strukturPemerintahanDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'ODI MARWAN S.S.M.Si',
            'jabatan'=> 'Kepala Desa',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '20-11-2000',
            'pendidikan' => 'S2',
            'nip' => '123456',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'IWAN S.Pd',
            'jabatan'=> 'BPD',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '20-11-2000',
            'pendidikan' => 'S1',
            'nip' => '123456',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'M.WILDAN FAUZI RAHMAN',
            'jabatan'=> 'SEKDES',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '20-11-2000',
            'pendidikan' => 'SMA',
            'nip' => '123456',
            'user_id' => 1
        ]);
    }
}
