@extends('layout.master')

@section('judul')
    Halaman Detail genre
@endsection

@section('content')
        <h5>{{$genre->nama_genre}}</h5>
        
        <a href="/genre" class="btn btn-secondary btn-block btn-sm">Kembali</a>

@endsection