<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;

class galeriController extends Controller
{
    public function index ()
    {
        $galeri = galeri::all();
        return view("pages.galeri",[
            "galeri" => $galeri,
        ]);
    }
}
