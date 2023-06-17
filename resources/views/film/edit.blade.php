@extends('layout.master')

@section('judul')
    Halaman Edit Film
@endsection

@section('content')
    <div>
        <h2>Edit Film</h2>
        <form action="/film/{{ $film->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Film</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $film->judul }}"
                    placeholder="Masukkan Nama judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan">{{ $film->ringkasan }}   </textarea>
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" name="tahun" id="tahun" value="{{ $film->tahun }}"
                    placeholder="Masukkan Tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" value="{{ $film->poster }}"
                    placeholder="Masukkan Poster">
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
                        @if ($item->id === $film->genre_id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama_genre }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->nama_genre }}</option>
                        @endif
                    
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
