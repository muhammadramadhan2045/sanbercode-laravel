<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use App\Models\Cast;
use App\Models\Film;

class PeranController extends Controller
{

    public function index()
    {
        $peran = Peran::get();
        return view('peran.index',['peran' => $peran]);
    }

    public function create(){
        $film = Film::get();
        $cast = Cast::get();
        return view('peran.create',['film' =>$film,'cast'=>$cast ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peran'=>'required',
            'cast_id'=>'required',
            'film_id'=>'required',
        ]);


        $film= new Peran();
        $film->nama_peran = $request->nama_peran;
        $film->cast_id = $request->cast_id;
        $film->film_id = $request->film_id;
        $film->save();

        return redirect('/peran')->with('status','Data Berhasil Ditambahkan');

    }

    public function show($id)
    {
        $peran = Peran::find($id);
        return view('peran.show',['peran' =>$peran ]);
    }

    public function edit($id)
    {
        $peran = Peran::find($id);
        $film = Film::get();
        $cast = Cast::get();
        return view('peran.edit',['peran' =>$peran,'film' =>$film,'cast'=>$cast ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama_peran'=>'required',
            'cast_id'=>'required',
            'film_id'=>'required',
        ]);

        $peran = Peran::find($id);
        $peran->nama_peran = $request->nama_peran;
        $peran->cast_id = $request->cast_id;
        $peran->film_id = $request->film_id;
        $peran->save();

        return redirect('/peran')->with('status','Data Berhasil Diubah');
    }


    public function destroy($id)
    {
        $peran = Peran::find($id);
        $peran->delete();
        return redirect('/peran')->with('status','Data Berhasil Dihapus');
    }

}

