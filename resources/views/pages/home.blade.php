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
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-body-secondary">© 2023</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
      </ul>
    </div>
  </footer>
@endsection
