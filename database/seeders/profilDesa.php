<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class profilDesa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil_desas')->insert([
            'foto_desa' => '',
            'nama_desa' => 'Karehkel',
            'sejarah' => 'Desa Karehkel adalah salah satu Desa di wilayah Utara Kecamatan Leuwiliang, dengan luas wilayah
            420 Ha. secara geografis berbatasan dengan Kecamatan Rumpin',
            'visi' => 'Memajukan kesejahteraan masyarakat desa',
            'misi' => 'Membantu mewujudkan Aspirasi Masyarakat',
            'user_id' => 1
        ]);
    }
}
