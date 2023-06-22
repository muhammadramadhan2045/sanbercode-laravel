@extends('layout.master')

@section('judul')
    Halaman Update Profile
@endsection

@section('content')
    <div>
        <h2>Tambah Data</h2>
        <form action="/profil/{{ $detailProfil->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" value="{{ $detailProfil->user->name }}" disabled>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" value="{{ $detailProfil->user->email }}" disabled>
            </div>

            <div class="form-group">
                <label for="age">Umur</label>
                <input type="number" class="form-control" name="age" id="age" value="{{ $detailProfil->age }}"
                    placeholder="Masukkan age">
                @error('age')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea type="text" class="form-control" name="bio" id="bio" value="{{ $detailProfil->bio }}"
                    placeholder="Masukkan Bio">{{ $detailProfil->bio }}</textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <textarea type="text" class="form-control" name="alamat" id="alamat" value="{{ $detailProfil->alamat }}"
                    placeholder="Masukkan alamat">{{ $detailProfil->alamat }}</textarea>
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
