<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = galeri::all();

        return view("admin.galeri.index", [
            'galeri' => $galeri
        ]);
    }
    
    public function add()
    {
        return view("admin.galeri.add");
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
        galeri::create($data);

        return redirect()->route('admin-galeri-desa')->with('message','success');
    }

    public function edit($id)
    {
        $galeri = galeri::find($id);
        return view("admin.galeri.edit", [
            'galeri' => $galeri
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_galeri'))){
            $galeri = galeri::find($id);
            $galeri->update([
                'judul' => $request->judul,
                'pemilik' => $request->pemilik,
                'ig' => $request->ig,
                'toko' => $request->toko,
                'user_id' => Auth::id(),
                'is_active' => $request->is_active
            ]);
            return redirect()->route('admin-galeri-desa')->with('message','success');
        }else{
            $galeri = galeri::find($id);
            Storage::delete($galeri->gambar_galeri);
            $galeri->update([
                'gambar_galeri' => $request->file('gambar_galeri')->store('galeri'),
                'judul' => $request->judul,
                'pemilik' => $request->pemilik,
                'ig' => $request->ig,
                'toko' => $request->toko,
                'user_id' => Auth::id(),
                'is_active' => $request->is_active
            ]);
            return redirect()->route('admin-galeri-desa')->with('message','success');
        }
    }

    public function delete($id)
    {
        $galeri = galeri::find($id);

        Storage::delete($galeri->gambar_galeri);

        $galeri->delete($id);

        return redirect()->route('admin-galeri-desa')->with('message','success');
    }
}
