<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\peribadatan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PeribadatanController extends Controller
{
    public function index()
    {
        $peribadatan = peribadatan::all();

        return view("admin.peribadatan.index", [
            'peribadatan' => $peribadatan
        ]);
    }

    public function add()
    {
        return view("admin.peribadatan.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'tempat_ibadah' => 'required',
            'jumlah' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        peribadatan::create($data);
        
        return redirect()->route('admin-peribadatan')->with('message','success');
    }

    public function edit($id)
    {
        $peribadatan = peribadatan::find($id);

        return view("admin.peribadatan.edit", [
            'peribadatan' => $peribadatan
        ]);
    }

    public function update(Request $request, $id){
        $peribadatan = peribadatan::find($id);

        $peribadatan->update([
            'tempat_ibadah' => $request->tempat_ibadah,
            'jumlah' => $request->jumlah, 
            'user_id' => Auth::id(),
        ]);
        
        return redirect()->route('admin-peribadatan')->with('message','success');
    }

    public function delete($id){
        $peribadatan = peribadatan::find($id);

        // delete data by the id
        $peribadatan->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-peribadatan')->with('message','success');
    }
}
