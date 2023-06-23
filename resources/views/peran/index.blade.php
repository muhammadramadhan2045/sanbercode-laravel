@extends('layout.master')

@section('judul')
  Halaman  peran
@endsection

@section('content')
<a href="/peran/create" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead >
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama peran</th>
                <th scope="col">Film</th>
                <th scope="col">Nama cast</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($peran as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama_peran}}</td>
                        <td>{{$value->film->judul}}</td>
                        <td>{{$value->cast->nama_cast}}</td>
                        <td class="row">
                            <a href="/peran/{{$value->id}}" class="btn btn-info  mx-2">Show</a>
                            <a href="/peran/{{$value->id}}/edit" class="btn btn-success mx-2">Edit</a>
                            <form action="/peran/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
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