@extends('layout.master')

@section('judul')
    Halaman Detail peran
@endsection

@section('content')
    <h5>Nama Peran: {{ $peran->nama_peran }}</h5>
    <h5>Nama Cast : {{$peran->cast->nama_cast}}</h5>
    <div class="row">
        <div class="col-4">
            <div class="card" >
                <img class="card-img-top" src="{{asset('image/'.$peran->film->poster)}}"   alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$peran->film->judul}}e</h5>
                    <p class="card-text">{{ Str::limit($peran->film->ringkasan, 50) }}</p>
                    <a href="/film/{{$peran->film->id}}" class="btn btn-secondary btn-block btn-sm mb-2">Detail Film</a>
        
                </div>
            </div>
        </div>
    </div>

    <a href="/peran" class="btn btn-secondary btn-block btn-sm">Kembali</a>
@endsection
