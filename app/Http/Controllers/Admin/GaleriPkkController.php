<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeripkk;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriPkkController extends Controller
{
    public function index()
    {
        $galeri = galeripkk::all();

        return view("admin.galeripkk.index", [
            'galeri' => $galeri
        ]);
    }
    
    public function add()
    {
        return view("admin.galeripkk.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'gambar_galeri' => 'required|mimes:jpg,jpeg,bmp,png|max:5012',
            'judul' => 'required',
            'pemilik' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['gambar_galeri'] = $request->file('gambar_galeri')->store('galeri');
        galeripkk::create($data);

        return redirect()->route('admin-galeri-pkk-desa')->with('message','success');
    }

    public function edit($id)
    {
        $galeri = galeripkk::find($id);
        return view("admin.galeripkk.edit", [
            'galeri' => $galeri
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_galeri'))){
            $galeri = galeripkk::find($id);
            $galeri->update([
                'judul' => $request->judul,
                'pemilik' => $request->pemilik,
                'ig' => $request->ig,
                'youtube' => $request->youtube,
                'user_id' => Auth::id(),
                'is_active' => $request->is_active
            ]);
            return redirect()->route('admin-galeri-pkk-desa')->with('message','success');
        }else{
            $galeri = galeripkk::find($id);
            Storage::delete($galeri->gambar_galeri);
            $galeri->update([
                'gambar_galeri' => $request->file('gambar_galeri')->store('galeri'),
                'judul' => $request->judul,
                'pemilik' => $request->pemilik,
                'ig' => $request->ig,
                'youtube' => $request->youtube,
                'user_id' => Auth::id(),
                'is_active' => $request->is_active
            ]);
            return redirect()->route('admin-galeri-pkk-desa')->with('message','success');
        }
    }

    public function delete($id)
    {
        $galeri = galeripkk::find($id);

        Storage::delete($galeri->gambar_galeri);

        $galeri->delete($id);

        return redirect()->route('admin-galeri-pkk-desa')->with('message','success');
    }
}
