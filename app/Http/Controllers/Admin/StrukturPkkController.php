<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\struktur_pkk;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StrukturPkkController extends Controller
{
    public function index()
    {
        $struktur = struktur_pkk::all();

        return view("admin.strukturpkk.index", [
            'struktur' => $struktur
        ]);
    }
    
    public function add()
    {
        return view("admin.strukturpkk.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'foto_pengurus' => 'required|mimes:jpg,jpeg,bmp,png|max:5012',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['foto_pengurus'] = $request->file('foto_pengurus')->store('struktur_pkk');

        struktur_pkk::create($data);

        return redirect()->route('admin-struktur-pkk-desa')->with('message','success');
    }

    public function edit($id)
    {
        $struktur = struktur_pkk::find($id);
        return view("admin.strukturpkk.edit", [
            'struktur' => $struktur
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('foto_pengurus'))){
            $struktur = struktur_pkk::find($id);
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-struktur-pkk-desa')->with('message','success');
        }else{
            $struktur = struktur_pkk::find($id);
            Storage::delete($struktur->foto_pengurus);
            $struktur->update([
                'foto_pengurus' => $request->file('foto_pengurus')->store('struktur_pkk'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-struktur-pkk-desa')->with('message','success');
        }
    }

    public function delete($id)
    {
        $struktur = struktur_pkk::find($id);

        Storage::delete($struktur->foto_pengurus);

        $struktur->delete($id);

        return redirect()->route('admin-struktur-pkk-desa')->with('message','success');
    }
}
