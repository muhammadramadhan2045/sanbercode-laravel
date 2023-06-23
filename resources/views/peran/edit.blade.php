@extends('layout.master')

@section('nama_peran')
    Halaman Edit peran
@endsection

@section('content')
    <div>
        <h2>Edit peran</h2>
        <form action="/peran/{{$peran->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_peran">Nama peran</label>
                <input type="text" class="form-control" name="nama_peran" id="nama_peran" value="{{ $peran->nama_peran }}"
                    placeholder="Masukkan Nama nama_peran">
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
                        @if ($item->id === $peran->film_id)
                            <option value="{{ $item->id }}" selected>{{ $item->judul }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->judul }}</option>
                        @endif
                    
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
                        @if ($item->id === $peran->cast_id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama_cast }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->nama_cast }}</option>
                        @endif
                    
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
