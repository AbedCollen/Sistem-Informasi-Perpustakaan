<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class controller_transaksi extends Controller {
    public function getTransaksi(Request $request){
        $keyword=$request->keyword;
            
            $query=transaksi::where('nama', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('pinjam','LIKE','%' . $keyword . '%' )
                            ->orWhere('balik','LIKE','%' . $keyword . '%' )
          ->paginate(15);
        return view('dsh_readtransaksi',['transaksi'=>$query]);
    }

    public function createTransaksi(Request $req){
        transaksi::insert([
            'nama' => $req->nama, 'pinjam' => $req->pinjam,  'balik' => $req->balik]);
        return redirect('/dashboard_transaksi');
    }

    // public function getbyid($id){
    //     $query=transaksi::select('id', 'nama', 'pinjam', 'balik');
    //     $query=$query->where('id', $id)->get();
    //     return view('dsh_updatetransaksi',['transaksi'=>$query]);
    // }
    
    // public function updateTransaksi(Request $req){
    //     transaksi::where('id', $req->id)->update([
    //         'nama' => $req->nama, 'pinjam' => $req->pinjam, 'balik' => $req->balik]);
    //     return redirect('/dashboard_transaksi');
    // }
    
    public function deleteTransaksi(Request $req){
        transaksi::where('id', $req->id)->delete();
        return redirect('/dashboard_transaksi');
    }

    public function getTransaksiUser(Request $request){
        $keyword=$request->keyword;
            
            $query=transaksi::where('nama', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('pinjam','LIKE','%' . $keyword . '%' )
                            ->orWhere('balik','LIKE','%' . $keyword . '%' )
          ->paginate(15);
        return view('dsh_readtransaksi_user',['transaksi'=>$query]);
    }
}
