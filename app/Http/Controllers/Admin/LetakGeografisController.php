<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\letak_geografis;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LetakGeografisController extends Controller
{
    public function index()
    {
        $letak_geografis = letak_geografis::all();

        return view("admin.letak-geografis.index", [
            'letak_geografis' => $letak_geografis
        ]);
    }

    public function add()
    {
        return view("admin.letak-geografis.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'batas' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        letak_geografis::create($data);
        
        return redirect()->route('admin-letak-geografis')->with('message','success');
    }

    public function edit($id)
    {
        $letak_geografis = letak_geografis::find($id);

        return view("admin.letak-geografis.edit", [
            'letak_geografis' => $letak_geografis
        ]);
    }

    public function update(Request $request, $id){
        $letak_geografis = letak_geografis::find($id);

        $letak_geografis->update([
            'batas' => $request->batas,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten, 
            'user_id' => Auth::id(),
        ]);
    
        return redirect()->route('admin-letak-geografis')->with('message','success');
    }

    public function delete($id){
        $letak_geografis = letak_geografis::find($id);

        // delete data by the id
        $letak_geografis->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-letak-geografis')->with('message','success');
    }
}
