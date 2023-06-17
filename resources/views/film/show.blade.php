@extends('layout.master')

@section('judul')
    Halaman Detail Film
@endsection

@section('content')

    <img class="card-img-top" src="{{asset('image/'.$film->poster)}}"   alt="Card image cap">
        <h5 class="card-title">{{$film->judul}}e</h5>
        <p class="card-text">{{$film->ringkasan}}</p>
        <a href="/film" class="btn btn-secondary btn-block btn-sm">Kembali</a>

@endsection