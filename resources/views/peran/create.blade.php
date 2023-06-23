@extends('layout.master')

@section('judul')
  Halaman Create peran  
@endsection

@section('content')

<div>
    <h2>Tambah Data</h2>
        <form action="/peran" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_peran">Nama peran</label>
                <input type="text" class="form-control" name="nama_peran" id="nama_peran" placeholder="Masukkan Nama peran">
                @error('nama_peran')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Film</label>
                <select name="film_id" class="form-control">
                    <option value="">Pilih film</option>
                    @forelse ($film as $item)
                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                    @empty
                        <option value="">Tidak Ada film</option>
                    @endforelse
                </select>
                @error('film_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">cast</label>
                <select name="cast_id" class="form-control">
                    <option value="">Pilih cast</option>
                    @forelse ($cast as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_cast }}</option>
                    @empty
                        <option value="">Tidak Ada cast</option>
                    @endforelse
                </select>
                @error('cast_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection