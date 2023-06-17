@extends('layout.master')

@section('judul')
  Halaman Create Film
@endsection

@section('content')

<div>
    <h2>Tambah Data</h2>
        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Film</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Nama judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan"></textarea>
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan Poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Genre</label>
                <select name="genre_id" class="form-control">
                    <option value="">Pilih Genre</option>
                    @forelse ($genre as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_genre }}</option>
                    @empty
                        <option value="">Tidak Ada Genre</option>
                    @endforelse
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection