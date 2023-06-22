<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Profil;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index(){
        $iduser = Auth::id();
        $detailProfile = Profil::where('user_id', $iduser)->first();
 
    
        return view('profil.index',['detailProfil'=>$detailProfile]);
    }

    public function update(Request $request ,$id){
        $request->validate([
            'age'=>'required',
            'bio'=>'required',
            'alamat'=>'required',
        ]);
        $profil= Profil::find($id);


        $profil->age = $request->age;
        $profil->bio = $request->bio;
        $profil->alamat = $request->alamat;
        $profil->save();

        return redirect('/profil')->with('status','Data Berhasil Diubah');
    
    }
}
