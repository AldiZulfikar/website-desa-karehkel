<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_pendidikan_desa;
use App\Models\jumlah_penduduk;
use App\Models\letak_geografis;
use App\Models\peribadatan;
use App\Models\tenaga_kesehatan;

class dataDesaController extends Controller
{
    public function index()
    {
        $data_pendidikan = data_pendidikan_desa::all();
        $jumlah_penduduk = jumlah_penduduk::all();
        $letak_geografis = letak_geografis::all();
        $peribadatan = peribadatan::all();
        $tenaga_kesehatan = tenaga_kesehatan::all();

        return view ("pages.datadesa", [
            "data_pendidikan" => $data_pendidikan,
            "jumlah_penduduk" => $jumlah_penduduk,
            "letak_geografis" => $letak_geografis,
            "peribadatan" => $peribadatan,
            "tenaga_kesehatan" => $tenaga_kesehatan,
        ]);
    }
}
