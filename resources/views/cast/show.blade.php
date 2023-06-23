@extends('layout.master')

@section('judul')
  Halaman  show detail Cast
@endsection

@section('content')
<a href="/cast" class="btn btn-primary mb-5 ">Lihat Semua Cast</a>
<tr></tr>
<h5><tr><td> Nama</td><td> : </td><td>{{$cast->nama_cast}}</td></tr></h3>
<h5><tr><td> Umur</td><td> : </td><td>{{$cast->umur}}</td></tr></h3>
<p>{{$cast->bio}}</p>

<h3>Daftar Film {{$cast->nama_cast}}</h3>
<ul>

      <div class="row">
        <div class="card-body pb-0">
          <div class="row">
            @forelse ($cast->peran as $item)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$item->film->judul}}</b></h2>
                      <p class="text-muted text-sm"><b>Ringkasan: </b> {{ Str::limit($item->film->ringkasan, 20) }} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span> Tahun: {{$item->film->tahun}}</li>
                        <li class="small badge badge-info"><span class="fa-li"><i class=""></i></span> {{$item->film->genre->nama_genre}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('image/'.$item->film->poster)}}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="/film/{{$item->film->id}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Lihat Detail Film
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @empty
            <li>masih sepi job film</li>
        @endforelse
          </div>
        </div>
      </div>

</ul>

@endsection