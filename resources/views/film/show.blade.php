@extends('layout.master')

@section('judul')
    Halaman Detail Film
@endsection

@section('content')
    <img class="card-img-top" src="{{ asset('image/' . $film->poster) }}" alt="Card image cap">
    <bold>
        <h5 class="card-title">{{ $film->judul }}</h5>
    </bold>
    <p class="card-text">{{ $film->ringkasan }}</p>

    <h4>Pemeran</h4>
    <ul>
        @forelse ($film->peran as $item)
            <li>{{ $item->cast->nama_cast }} sebagai <h5 class="badge badge-info">{{ $item->nama_peran }}</h5> </li>
        @empty
            <h3>Belum ada pemeran</h3>
        @endforelse
    </ul>



    <hr>
    <h4>List Komentar </h4>
    @forelse ($film->rating as $item)
        <div class="media my-3 border">
            <img class="mr-3" src="{{ asset('/admin/dist/img/user.png')}}" style="border-radius:50%" width="50px"    alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">{{ $item->user->name }}</h5>
                <h6 class="mt-0">Rating : {{ $item-> rating }}</h6>
                {{ $item->komentar }}
            </div>
        </div>
    @empty
        <h3>Belum ada komentar</h3>
    @endforelse

    <hr>
    <form action="/rating{{ $film->id }}" method="POST">
        @csrf
        <input type="number" name="rating" class="form-control" placeholder="isi rating 1-5">
        @error('rating')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <textarea name="komentar" id="komentar" class="form-control my-3" placeholder="isi Komentar" cols="20"></textarea>
        @error('komentar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <input type="submit" value="komentar">
    </form>
    <hr>

    <a href="/film" class="btn btn-secondary btn-block btn-sm">Kembali</a>
@endsection
