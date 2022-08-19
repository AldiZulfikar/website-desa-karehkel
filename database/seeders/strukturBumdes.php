<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class strukturBumdes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'ODI MARWAN S.S.M.Si',
            'jabatan'=> 'Komisaris',
            'user_id' => 1
        ]);
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'H. Satiri',
            'jabatan'=> 'Ketua Pengawas',
            'user_id' => 1
        ]);
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'Uding',
            'jabatan'=> 'Anggota Pengawas',
            'user_id' => 1
        ]);
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'Ahmad Saripudin',
            'jabatan'=> 'Direktur',
            'user_id' => 1
        ]);
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'Ilham Kurniawan S.I.Kom',
            'jabatan'=> 'Sekretaris',
            'user_id' => 1
        ]);
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'Levina Maulidina',
            'jabatan'=> 'Bendahara',
            'user_id' => 1
        ]);
        DB::table('bumdes')->insert([
            'foto_pengurus' => '',
            'nama' => 'Rima',
            'jabatan'=> 'Anggota',
            'user_id' => 1
        ]);
    }
}
