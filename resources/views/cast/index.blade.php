@extends('layout.master')

@section('judul')
  Halaman  Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead >
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Cast</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama_cast}}</td>
                        <td>{{$value->umur}}</td>
                        <td>{{$value->bio}}</td>
                        <td>
                            <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/cast/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                            <form action="/cast/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection