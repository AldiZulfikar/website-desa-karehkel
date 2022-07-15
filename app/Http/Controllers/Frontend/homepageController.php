<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;
use App\Models\agenda_desa;
use App\Models\profil_desa;
use Illuminate\Support\Str;

class homepageController extends Controller
{
    public function index ()
    {
        $agenda = agenda_desa::paginate(4);
        $berita = berita_desa::paginate(6);
        $profil = profil_desa::all()->first();
        return view("pages.homepage",[
            'agenda' => $agenda,
            'berita' => $berita,
            'profil' => $profil
        ]);
    }
}
