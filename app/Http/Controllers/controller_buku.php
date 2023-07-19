<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class controller_buku extends Controller {
    
    public function getBuku(Request $request){
        $keyword=$request->keyword;
        $query=buku::where('judul', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('pengarang','LIKE','%' . $keyword . '%' )
                        ->orWhere('penerbit','LIKE','%' . $keyword . '%' )
                        ->orWhere('tanggal_masuk','LIKE','%' . $keyword . '%' )
      ->paginate(15);
        return view('dsh_readbuku',['buku'=>$query]);
    }

    public function createBuku(Request $req){
        buku::insert([
            'judul' => $req->judul, 'pengarang' => $req->pengarang,  'penerbit' => $req->penerbit, 'tanggal_masuk' => $req->tanggal_masuk]);
        return redirect('/dashboard_buku');
    }

    public function getbyid($id){
        $query=buku::select('id','judul', 'pengarang', 'penerbit', 'tanggal_masuk');
        $query=$query->where('id', $id)->get();
        return view('dsh_updatebuku',['buku'=>$query]);
    }
    
    public function updateBuku(Request $req){
        buku::where('id', $req->id)->update([
            'judul' => $req->judul, 'pengarang' => $req->pengarang, 'penerbit' => $req->penerbit, 'tanggal_masuk' => $req->tanggal_masuk]);
        return redirect('/dashboard_buku');
    }
    
    public function deleteBuku(Request $req){
        buku::where('id', $req->id)->delete();
        return redirect('/dashboard_buku');
    }
    public function getBukuUser(Request $request){
        $keyword=$request->keyword;
        $query=buku::where('judul', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('pengarang','LIKE','%' . $keyword . '%' )
                        ->orWhere('penerbit','LIKE','%' . $keyword . '%' )
                        ->orWhere('tanggal_masuk','LIKE','%' . $keyword . '%' )
      ->paginate(15);
        return view('dsh_readbuku_user',['buku'=>$query]);
    }


  
 


}
