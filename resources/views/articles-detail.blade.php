@extends('layout.app')
@section('content')

<div class="container mt-5 mb-3">
    <div class="img-artikel d-flex justify-content-center">
        @if(!$article->gambar)
        <img src="https://dl.airtable.com/.attachments/2bfc99ca536b8a505307326ae274621e/ebf60463/working-code_1098-19858.jpeg" alt="">
        @else
        <img src="{{ asset('storage') }}/{{ $article->gambar }}" alt="Gambar {{ $article->judul }}">
        @endif
    </div>
    <div class="judul mt-3 d-flex justify-content-between">
        <div class="info">
            <h3>{{ $article->judul }}</h3>
            <p>{{ $article->penulis }} {{ $article->updated_at }}</p>
            <p>Kategori = {{ $article->kategori }}</p>
        </div>
        <div class="share">
            {{-- <a href="#" class="btn btn-primary">Share</a> --}}
        </div>
    </div>
    <div class="artikel">
        <p>{!! $article->artikel !!}</p>
    </div>
</div>

@endsection()