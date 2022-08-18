<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pokja;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PokjaController extends Controller
{
    public function index()
    {
        $pokja = pokja::all();

        return view("admin.pokja.index", [
            'pokja' => $pokja
        ]);
    }
    
    public function add()
    {
        return view("admin.pokja.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'kelompok' => 'required',
            'program' => 'required',
            'kegiatan' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        pokja::create($data);

        return redirect()->route('admin-pokja-desa')->with('message','success');
    }

    public function edit($id)
    {
        $pokja = pokja::find($id);
        return view("admin.pokja.edit", [
            'pokja' => $pokja
        ]);
    }

    public function update(Request $request, $id)
    {
        $pokja = pokja::find($id);
        $pokja->update([
            'kelompok' => $request->kelompok,
            'program' => $request->program,
            'kegaiatan' => $request->kegiatan,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('admin-pokja-desa')->with('message','success');
    }

    public function delete($id)
    {
        $pokja = pokja::find($id);

        $pokja->delete($id);

        return redirect()->route('admin-pokja-desa')->with('message','success');
    }
}