@extends('layout.master')

@section('judul')
    Halaman Index genre
@endsection

@section('content')
    <a href="/genre/create" class="btn btn-primary btn-sm mb-4">Tambah Genre Film</a>

    <div>
        @forelse ($genre as $item=>$result)
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Genre</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$item+1}}</th>
                                <td>{{$result->nama_genre}}   </td>
                                <td> 
                                    @auth
                                        <div class="row">
                                            <div class="col">
                                                <a href="/genre/{{ $result->id }}" class="btn btn-secondary btn-block btn-sm mb-2">Detail genre</a>
                                            </div>
                                            <div class="col">
                                                <a href="/genre/{{ $result->id }}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                                            </div>
                                            <div class="col">
                                                <form action="/genre/{{ $result->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger btn-block btn-sm" value="Hapus">
                                                </form>
                                            </div>
                                        </div>
                                    @endauth
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>


        @empty
            <h2>Data Genre belum di input</h2>
        @endforelse
    </div>
@endsection
