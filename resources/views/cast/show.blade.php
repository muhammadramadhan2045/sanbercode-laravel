@extends('layout.master')

@section('judul')
  Halaman  show detail Cast
@endsection

@section('content')
<a href="/cast" class="btn btn-primary ">Lihat Semua Cast</a>
<h2>Show Cast Id ke-{{$cast->id}}</h2>
<tr></tr>
<h3><tr><td> Nama</td><td> : </td><td>{{$cast->nama_cast}}</td></tr></h3>
<h3><tr><td> Umur</td><td> : </td><td>{{$cast->umur}}</td></tr></h3>
<h4>{{$cast->bio}}</h4>
@endsection