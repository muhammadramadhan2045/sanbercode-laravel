<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function create(){
        return view('cast.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_cast'=>'required|max:255',
            'umur'=>'required',
            'bio'=>'required'
        ]);
       
        $cast= new Cast();
        $cast->nama_cast=$request->nama_cast;
        $cast->umur=$request->umur;
        $cast->bio=$request->bio;
        $cast->save();
        return redirect('/cast')->with('status','Data Berhasil Ditambahkan');
    }

    public function index(){

        $cast=Cast::get();
        return view('cast.index',['cast'=>$cast]);
    }

    public function show($cast_id){
        $cast= Cast::find($cast_id);
        return view('cast.show',['cast'=>$cast]);
    }

    public function edit($cast_id){
        $cast= Cast::find($cast_id);
        return view('cast.edit',['cast' =>$cast]);
    }

    public function update($cast_id, Request $request){
        $request->validate([
            'nama_cast'=>'required|max:255',
            'umur'=>'required',
            'bio'=>'required'
        ]);
        
        $cast= Cast::find($cast_id);
        $cast->nama_cast=$request->nama_cast;
        $cast->umur=$request->umur;
        $cast->bio=$request->bio;
        $cast->save();
        return redirect('/cast')->with('status','Data Berhasil Diubah');
    }

    public function destroy($cast_id){
        $cast=Cast::find($cast_id);
        $cast->delete();
        return redirect('/cast')->with('status','Data Berhasil Dihapus');
    }
}    
