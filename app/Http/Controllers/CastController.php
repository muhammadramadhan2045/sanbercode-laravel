<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        DB::table('cast')->insert([
            'nama_cast'=>$request->nama_cast,
            'umur'=>$request->umur,
            'bio'=>$request->bio
        ]);
        return redirect('/cast')->with('status','Data Berhasil Ditambahkan');
    }

    public function index(){
        $cast = DB::table('cast')->get();
        return view('cast.index',['cast'=>$cast]);
    }

    public function show($cast_id){
        $cast = DB::table('cast')->where('id',$cast_id)->first();
        return view('cast.show',['cast'=>$cast]);
    }

    public function edit($cast_id){
        $cast = DB::table('cast')->where('id',$cast_id)->first();
        return view('cast.edit',['cast'=>$cast]);
    }

    public function update($cast_id, Request $request){
        $request->validate([
            'nama_cast'=>'required|max:255',
            'umur'=>'required',
            'bio'=>'required'
        ]);
        DB::table('cast')->where('id',$cast_id)->update([
            'nama_cast'=>$request->nama_cast,
            'umur'=>$request->umur,
            'bio'=>$request->bio
        ]);
        return redirect('/cast')->with('status','Data Berhasil Diubah');
    }

    public function destroy($cast_id){
        DB::table('cast')->where('id',$cast_id)->delete();
        return redirect('/cast')->with('status','Data Berhasil Dihapus');
    }
}    
