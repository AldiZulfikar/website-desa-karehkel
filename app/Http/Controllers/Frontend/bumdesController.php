<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bumdes;

class bumdesController extends Controller
{
    public function index()
    {
        $struktur = bumdes::all();
        return view("pages.bumdes",[
            'struktur' => $struktur
        ]);
    }
}
