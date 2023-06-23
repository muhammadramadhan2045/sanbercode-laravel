@extends('layout.master')

@section('nama_genre')
    Halaman Edit Genre
@endsection

@section('content')
    <div>
        <h2>Edit genre</h2>
        <form action="/genre/{{ $genre->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_genre">Nama genre</label>
                <input type="text" class="form-control" name="nama_genre" id="nama_genre" value="{{ $genre->nama_genre }}"
                    placeholder="Masukkan Nama nama_genre">
                @error('nama_genre')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi">{{ $genre->deskripsi }}   </textarea>
                @error('deskripsi')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
