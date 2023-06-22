@extends('layout.master')

@section('nama_genre')
  Halaman Create Genre
@endsection

@section('content')

<div>
    <h2>Tambah Data</h2>
        <form action="/genre" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_genre">Nama Genre</label>
                <input type="text" class="form-control" name="nama_genre" id="nama_genre" placeholder="Masukkan Genre">
                @error('nama_genre')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection