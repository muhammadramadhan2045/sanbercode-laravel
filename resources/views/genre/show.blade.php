@extends('layout.master')

@section('judul')
    Halaman Detail genre
@endsection

@section('content')
    <h5>{{ $genre->nama_genre }}</h5>
    <p>{{ $genre->deskripsi }}</p>
    <div class="row">
        @forelse ($genre->films as $item)
        <div class="col-4">
            <div class="card" >
                <img class="card-img-top" src="{{asset('image/'.$item->poster)}}"   alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}e</h5>
                    <p class="card-text">{{ Str::limit($item->ringkasan, 50) }}</p>
                    <a href="/film/{{$item->id}}" class="btn btn-secondary btn-block btn-sm mb-2">Detail Film</a>
        
                </div>
            </div>
        </div>
        @empty
            <h3>Kategori ini belum ada postingan </h3>
        @endforelse

    </div>

    <a href="/genre" class="btn btn-secondary btn-block btn-sm">Kembali</a>
@endsection
