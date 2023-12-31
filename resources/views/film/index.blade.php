@extends('layout.master')

@section('judul')
    Daftar Film
@endsection

@section('content')
    <a href="/film/create" class="btn btn-primary btn-sm mb-4">Tambah Post</a>

    <div class="row">
        @forelse ($film as $item)
            <div class="col-4">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('image/'.$item->poster)}}" height="250px"   alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">{{$item->judul}}</h3>
                        <br>
                        <span class="badge badge-info">{{$item->genre->nama_genre}}</span>
                        <p class="card-text">{{ Str::limit($item->ringkasan, 50) }}</p>
                        <a href="/film/{{$item->id}}" class="btn btn-secondary btn-block btn-sm mb-2">Detail Film</a>
                        @auth
                        <div class="row">
                            <div class="col">
                                <a href="/film/{{$item->id}}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                            </div>
                            <div class="col">
                                <form action="/film/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-block btn-sm" value="Hapus">
                                </form>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
      
        @empty
            <h2>Tidak ada postingan</h2>
        @endforelse
    </div>
@endsection
