@extends('layout.master')

@section('judul')
  Halaman Edit Cast  
@endsection

@section('content')

<div>
    <h2>Edit Data</h2>
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_cast">Nama Cast</label>
                <input type="text" class="form-control" name="nama_cast" id="nama_cast" value="{{$cast->nama_cast}}" placeholder="Masukkan Nama Cast">
                @error('nama_cast')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" value="{{$cast->umur}}" placeholder="Masukkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio">{{$cast->bio}}</textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection