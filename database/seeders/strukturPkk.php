<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class strukturPkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. ASTRIANA MARWAN',
            'jabatan'=> 'Ketua',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'ODI MARWAN S.S.M.Si',
            'jabatan'=> 'Pembina',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. IKA ATIKAH',
            'jabatan'=> 'Wakil Ketua',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. CUCU SUKARSIH',
            'jabatan'=> 'Bendahara',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. SANTI',
            'jabatan'=> 'Wakil Bendahara',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. TETEN P.S',
            'jabatan'=> 'Sekretaris',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. SITI ROBEAH',
            'jabatan'=> 'Wakil Sekretaris',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. JUBAEDAH',
            'jabatan'=> 'Ketua POKJA I',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. NURHAYATI',
            'jabatan'=> 'Anggota POKJA I',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. LENIH',
            'jabatan'=> 'Anggota POKJA I',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. LIA WAROKA',
            'jabatan'=> 'Ketua POKJA II',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. DEWI FATMAWATI',
            'jabatan'=> 'Anggota POKJA II',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. SITI KOMARIAH',
            'jabatan'=> 'Anggota POKJA II',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. ENDEH',
            'jabatan'=> 'Ketua POKJA III',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. NIA KURNIA',
            'jabatan'=> 'Anggota POKJA III',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. MARYATI',
            'jabatan'=> 'Anggota POKJA III',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. RENI FITRIYANA',
            'jabatan'=> 'Ketua POKJA IV',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. ANITA',
            'jabatan'=> 'Anggota POKJA IV',
            'user_id' => 1
        ]);
        DB::table('struktur_pkks')->insert([
            'foto_pengurus' => '',
            'nama' => 'NY. SITI SYAHYANI',
            'jabatan'=> 'Anggota POKJA IV',
            'user_id' => 1
        ]);
    }
}
