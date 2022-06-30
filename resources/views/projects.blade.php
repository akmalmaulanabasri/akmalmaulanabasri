@extends('layout.app')
@section('content')
<div class="container mt-5 mb-3">
    <h2>Projects</h2>
    <h4>Daftar Projek-projek yang telah saya buat</h4>

    <div class="row">
        @foreach ($project as $item)
        <div class="col-lg-6 col-sm-12 mt-3">
            <div class="card shadow hover." data-aos="fade-in" data-aos-duration="1500">
                @if($item->gambar != null)
                    <img src="{{ asset('storage') }}/{{ $item->gambar }}" class="card-img-top post-gambar" alt="...">
                @else
                    <img src="https://source.unsplash.com/400x300?{{ $item->gambar }}" class="card-img-top post-gambar" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <a target="_blank" href="{{ $item->link }}" class="btn btn-secondary">Visit</a>
                    <a target="_blank" href="{{ $item->repo }}" class="btn btn-dark">Github</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection()