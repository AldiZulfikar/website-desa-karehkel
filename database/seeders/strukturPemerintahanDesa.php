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
            'tanggal_lahir' => '',
            'pendidikan' => 'S2',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'IWAN S.Pd',
            'jabatan'=> 'BPD',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'M.WILDAN FAUZI RAHMAN',
            'jabatan'=> 'SEKDES',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'NURFUJA ATIN KHOERIYAH',
            'jabatan'=> 'KAUR KEUANGAN',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'IWAN SETIAWAN',
            'jabatan'=> 'KAUR TATA USAHA & UMUM',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'ARIYANTO',
            'jabatan'=> 'KAUR PERENCANAAN',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'IWAN DARMAWAN',
            'jabatan'=> 'KASIE PEMERINTAHAN',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'ISKANDAR',
            'jabatan'=> 'KAUR KESEJAHTERAAN',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'TAQWA RIYADI',
            'jabatan'=> 'KAUR PELAYANAN',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'BAEDOWI',
            'jabatan'=> 'KADUS I',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'ANDI',
            'jabatan'=> 'KADUS II',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'ROBI IRAWAN',
            'jabatan'=> 'KADUS III',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'UJANG MARTIN',
            'jabatan'=> 'KADUS IV',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
        DB::table('struktur_pemerintahan_desas')->insert([
            'foto_pengurus' => '',
            'nama' => 'A. SEPULOH',
            'jabatan'=> 'KADUS V',
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => '',
            'pendidikan' => '-',
            'nip' => '-',
            'user_id' => 1
        ]);
    }
}
