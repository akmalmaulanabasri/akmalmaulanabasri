@extends('dashboard.layout.dashboard')
@section('dashboard')
    <div class="container">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Daftar Artikel</h2>
                <div class="">
                    <a target="_blank" href="{{ route('articles') }}" class="btn btn-info m-1">Preview Halaman</a>
                    <a href="{{ route('tambah-artikel') }}" class="btn btn-success m-1">Tambah Artikel</a>
                </div>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table border">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Artikel</th>
                            <th>Hero Image</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($artikel as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>visit</td>
                            <td>visit</td>
                            <td>
                                <a href="{{ route('edit-artikel', $item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('hapus-artikel', $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
   
@endsection()
