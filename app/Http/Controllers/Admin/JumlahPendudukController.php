<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jumlah_penduduk;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class JumlahPendudukController extends Controller
{
    public function index()
    {
        $jumlah_penduduk = jumlah_penduduk::all();

        return view("admin.jumlah-penduduk.index", [
            'jumlah_penduduk' => $jumlah_penduduk
        ]);
    }

    public function add()
    {
        return view("admin.jumlah-penduduk.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'lk' => 'required',
            'pr' => 'required',
            'jumlah_kk' => 'required',
            'laju_pertumbuhan' => 'required',
        ]);

        $data = $request->all();
        $data['jumlah'] = $request['lk'] + $request['pr'];
        $data['user_id'] = Auth::id();

        jumlah_penduduk::create($data);
        
        return redirect()->route('admin-penduduk')->with('message','success');
    }

    public function edit($id)
    {
        $jumlah_penduduk = jumlah_penduduk::find($id);

        return view("admin.jumlah-penduduk.edit", [
            'jumlah_penduduk' => $jumlah_penduduk
        ]);
    }

    public function update(Request $request, $id){
        $jumlah_penduduk = jumlah_penduduk::find($id);

        $jumlah_penduduk->update([
            'tahun' => $request->tahun,
            'lk' => $request->lk,
            'pr' => $request->pr,
            'jumlah' => $request->lk + $request->pr,
            'jumlah_kk' => $request->jumlah_kk,
            'user_id' => Auth::id(),
        ]);
        
    
        return redirect()->route('admin-penduduk')->with('message','success');
    }

    public function delete($id){
        $jumlah_penduduk = jumlah_penduduk::find($id);

        // delete data by the id
        $jumlah_penduduk->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-penduduk')->with('message','success');
    }
}
