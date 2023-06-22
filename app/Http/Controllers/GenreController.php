<?php

namespace App\Http\Controllers;
use App\Models\Genre;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $genre=Genre::get();
         return view('genre.index',['genre'=>$genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_genre'=>'required|max:255',
        ]);
       
        $genre= new Genre();
        $genre->nama_genre=$request->nama_genre;
        $genre->save();
        return redirect('/genre')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre= Genre::find($id);

        return view('genre.show',['genre' =>$genre ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre= Genre::find($id);
        return view('genre.edit',['genre' =>$genre ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_genre'=>'required|max:255',
        ]);

        $genre=Genre::find($id);
        $genre->nama_genre=$request->nama_genre;
        $genre->save();
        return redirect('/genre')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre=Genre::find($id);
        $genre->delete();
        return redirect('/genre')->with('status','Data Berhasil Dihapus');
    }
}
