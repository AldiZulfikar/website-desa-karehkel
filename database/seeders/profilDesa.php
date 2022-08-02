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
            'sejarah' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi, dolores nulla perspiciatis iure dicta nostrum accusantium quasi 
                        facilis modi fuga ducimus blanditiis adipisci at autem sequi, quod earum aut. Vero?',
            'visi' => 'Memajukan kesejahteraan masyarakat desa',
            'misi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eligendi, dolores nulla perspiciatis iure dicta nostrum accusantium quasi 
            facilis modi fuga ducimus blanditiis adipisci at autem sequi, quod earum aut. Vero?',
            'user_id' => 1
        ]);
    }
}
