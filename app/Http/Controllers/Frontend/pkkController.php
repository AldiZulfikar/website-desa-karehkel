<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\struktur_pkk;
use App\Models\pokja;
use App\Models\galeripkk;

class pkkController extends Controller
{
    public function index()
    {
        $struktur = struktur_pkk::all();
        $galeri = galeripkk::all();
        $pokja = pokja::all();

        return view("pages.pkk",[
            'pokja' => $pokja,
            'galeri' => $galeri,
            'struktur' => $struktur
        ]);
    }
}
