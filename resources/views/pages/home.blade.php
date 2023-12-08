@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://breakingnews.co.id/uploads/logo/logo_6307b7df601a68-22477459-21409271.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://breakingnews.co.id/uploads/logo/logo_6307b7df601a68-22477459-21409271.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://breakingnews.co.id/uploads/logo/logo_6307b7df601a68-22477459-21409271.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Kategori</li>
  <li class="list-group-item">Olahraga</li>
  <li class="list-group-item">Politik</li>
  <li class="list-group-item">Budaya</li>
  <li class="list-group-item">Wisata</li>
</ul>
    </div>
    <div class="col">
    <div class="container mt-3">
        <div class="row">
            @foreach ($allBerita as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card ">
                        <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top"
                            alt="">
                        <div class="card-body">
                            <div class="card-title h5 fw-bold">{{ Str::limit($item->judul, 25, '...') }}</div>
                            <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('detail', $item->id) }}"
                                    class="btn btn-md btn-outline-secondary">Go</a>
                                    <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span></small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col">
    <div class="container mt-3">
        <div class="row">
            @foreach ($allBerita as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card ">
                        <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top"
                            alt="">
                        <div class="card-body">
                            <div class="card-title h5 fw-bold">{{ Str::limit($item->judul, 25, '...') }}</div>
                            <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('detail', $item->id) }}"
                                    class="btn btn-md btn-outline-secondary">Go</a>
                                    <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span></small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
  </div>
</div>
    </div>
@endsection
