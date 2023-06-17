@extends('layout.master')

@section('judul')
  Halaman Create Cast  
@endsection

@section('content')

<div>
    <h2>Tambah Data</h2>
        <form action="/cast" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_cast">Nama Cast</label>
                <input type="text" class="form-control" name="nama_cast" id="nama_cast" placeholder="Masukkan Nama Cast">
                @error('nama_cast')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio"></textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection