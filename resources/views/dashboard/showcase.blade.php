@extends('dashboard.layout.dashboard')
@section('dashboard')
    <div class="container">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Daftar Projek</h2>
                <div class="">
                    <a target="_blank" href="{{ route('projects') }}" class="btn btn-info m-1">Preview Halaman</a>
                    <a href="{{ route('tambah-project') }}" class="btn btn-success m-1">Tambah Projek</a>
                </div>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table border">
                        <tr>
                            <th>No</th>
                            <th>Nama Project</th>
                            <th>Gambar</th>
                            <th>Link Website</th>
                            <th>Repositori</th>
                            <th>Featured</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul }}</td>
                                {{-- <td><img src="" alt="" class="img-fluid border"></td> --}}
                                <td>
                                    @if ($item->gambar != null)
                                        <p type="button" data-toggle="modal"
                                            data-target="#imagepPreview{{ $item->id }}" class="btn btn-info"><i
                                                class="bi bi-eye"></i> View Image</p>
                                    @else
                                        <p class="">No Image</p>
                                    @endif
                                </td>
                                <td><a target="_blank" href="{{ $item->link }}" class="btn btn-info">Visit</a></td>
                                <td><a target="_blank" href="{{ $item->repo }}" class="btn btn-info">Visit</a></td>
                                <td>{{ $item->featured }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('edit-project', $item->id) }}" class="btn btn-warning m-1">Edit</a>
                                    <a href="{{ route('delete-project', $item->id) }}"
                                        class="btn btn-danger m-1">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>



    @foreach ($data as $item)
        <div class="modal fade" id="imagepPreview{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="imagepPreviewLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imagepPreviewLabel">Gambar {{ $item->judul }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage') }}/{{ $item->gambar }}" class="img-fluid border shadow"
                            alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection()
