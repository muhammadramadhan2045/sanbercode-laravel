<?php

namespace App\Http\Controllers;
use App\Models\Rating;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function tambah(Request $request,$id){
        $request->validate([
            'rating'=>'required|numeric|min:1|max:5',
            'komentar'=>'required',
        ]);

        $rating= new Rating();
        $rating->rating=$request->rating;
        $rating->komentar=$request->komentar;
        $rating->user_id=Auth::id();
        $rating->film_id=$id;
        $rating->save();
        return redirect('/film/'.$id)->with('status','Data Berhasil Ditambahkan');
    }
}
