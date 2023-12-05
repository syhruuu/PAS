@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="mb-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="fw-bold my-auto">Tambah Kategori</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('kategori.perform')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="namaJudul" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" id="namaJudul">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="fw-bold my-auto">Manajemen Kategori</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive small">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allKategori as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$item->nama_kategori}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">edit</a>
                                    <a href="" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
