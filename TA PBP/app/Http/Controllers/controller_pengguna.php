<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;

class controller_pengguna extends Controller {
    public function getPengguna(Request $request){
      
            
            $keyword=$request->keyword;
            
            $query=pengguna::where('nama', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('alamat','LIKE','%' . $keyword . '%' )
                            ->orWhere('telepon','LIKE','%' . $keyword . '%' )
          ->paginate(15);
            return view('dsh_readpengguna',['pengguna'=>$query]);
    }

    public function createPengguna(Request $req){
        pengguna::insert([
            'un' => $req->un, 'pw' => $req->pw,  'nama' => $req->nama, 'alamat' => $req->alamat, 'telepon' => $req->telepon, 'role' => $req->role]);
        return redirect('/dashboard_pengguna');
    }

    public function getbyid($id){
        $query=pengguna::select('id', 'un', 'pw', 'nama', 'alamat', 'telepon', 'role');
        $query=$query->where('id', $id)->get();
        return view('dsh_updatepengguna',['pengguna'=>$query]);
    }
    
    public function updatePengguna(Request $req){
        pengguna::where('id', $req->id)->update([
            'un' => $req->un, 'pw' => $req->pw,  'nama' => $req->nama, 'alamat' => $req->alamat, 'telepon' => $req->telepon, 'role' => $req->role]);
        return redirect('/dashboard_pengguna');
    }
    
    public function deletePengguna(Request $req){
        pengguna::where('id', $req->id)->delete();
        return redirect('/dashboard_pengguna');
    }
 
}
