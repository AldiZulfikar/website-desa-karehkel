<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;
use App\Models\agenda_desa;
use App\Models\profil_desa;
use App\Models\jumlah_penduduk;
use App\Models\galeri;
use Illuminate\Support\Str;

class homepageController extends Controller
{
    public function index ()
    {
        $agenda = agenda_desa::paginate(3)->sortByDesc('id');
        $galeri = galeri::paginate(3)->sortByDesc('id');
        $berita = berita_desa::paginate(6)->sortByDesc('id');
        $profil = profil_desa::all()->first();
        $jumlah = jumlah_penduduk::all()->sortByDesc('id')->first();
        return view("pages.homepage",[
            'agenda' => $agenda,
            'galeri' => $galeri,
            'berita' => $berita,
            'profil' => $profil,
            'jumlah' => $jumlah
        ]);
    }
}
