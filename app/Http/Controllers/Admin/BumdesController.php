<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bumdes;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class BumdesController extends Controller
{
    public function index()
    {
        $struktur = bumdes::all();

        return view("admin.bumdes.index", [
            'struktur' => $struktur
        ]);
    }
    
    public function add()
    {
        return view("admin.bumdes.add");
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
        $data['foto_pengurus'] = $request->file('foto_pengurus')->store('bumdes');

        bumdes::create($data);

        return redirect()->route('admin-struktur-bumdes')->with('message','success');
    }

    public function edit($id)
    {
        $struktur = bumdes::find($id);
        return view("admin.bumdes.edit", [
            'struktur' => $struktur
        ]);
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('foto_pengurus'))){
            $struktur = bumdes::find($id);
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-struktur-bumdes')->with('message','success');
        }else{
            $struktur = bumdes::find($id);
            Storage::delete($struktur->foto_pengurus);
            $struktur->update([
                'foto_pengurus' => $request->file('foto_pengurus')->store('bumdes'),
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('admin-struktur-bumdes')->with('message','success');
        }
    }

    public function delete($id)
    {
        $struktur = bumdes::find($id);

        Storage::delete($struktur->foto_pengurus);

        $struktur->delete($id);

        return redirect()->route('admin-struktur-bumdes')->with('message','success');
    }
}