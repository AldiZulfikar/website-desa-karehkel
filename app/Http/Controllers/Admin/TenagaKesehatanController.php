<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tenaga_kesehatan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TenagaKesehatanController extends Controller
{
    public function index()
    {
        $tenaga_kesehatan = tenaga_kesehatan::all();

        return view("admin.tenaga-kesehatan.index", [
            'tenaga_kesehatan' => $tenaga_kesehatan
        ]);
    }

    public function add()
    {
        return view("admin.tenaga-kesehatan.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'jenis' => 'required',
            'tenaga_kesehatan' => 'required',
            'jumlah' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        tenaga_kesehatan::create($data);
        
        return redirect()->route('admin-tenaga-kesehatan')->with('message','success');
    }

    public function edit($id)
    {
        $tenaga_kesehatan = tenaga_kesehatan::find($id);

        return view("admin.tenaga-kesehatan.edit", [
            'tenaga_kesehatan' => $tenaga_kesehatan
        ]);
    }

    public function update(Request $request, $id){
        $tenaga_kesehatan = tenaga_kesehatan::find($id);

        $tenaga_kesehatan->update([
            'jenis' => $request->jenis,
            'tenaga_kesehatan' => $request->tenaga_kesehatan,
            'jumlah' => $request->jumlah,
            'user_id' => Auth::id(),
        ]);
    
        return redirect()->route('admin-tenaga-kesehatan')->with('message','success');
    }

    public function delete($id){
        $tenaga_kesehatan = tenaga_kesehatan::find($id);

        // delete data by the id
        $tenaga_kesehatan->delete($id);

        // redirect ke halaman index ss
        return redirect()->route('admin-tenaga-kesehatan')->with('message','success');
    }
}
