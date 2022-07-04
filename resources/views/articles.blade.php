@extends('layout.app')
@section('content')
    <div class="container mt-5 mb-3">
        <h2>Artikel</h2>
        <h4>Beberapa Artikel Yang Saya Tulis :)</h4>

        <div class="row">
            @foreach ($articles as $item)
                <div class="col-lg-6 col-sm-12 mt-3">
                    <div class="card shadow hover." data-aos="fade-in" data-aos-duration="1500">
                        @if (!$item->gambar)
                            <img src="https://dl.airtable.com/.attachments/2bfc99ca536b8a505307326ae274621e/ebf60463/working-code_1098-19858.jpeg"
                                alt="">
                        @else
                            <img src="{{ asset('storage') }}/{{ $item->gambar }}" alt="Gambar {{ $item->judul }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $item->judul }}</h5>
                            <div class="card-text text-dark">{!! Str::words($item->artikel, 15) !!}</div></div>
                            <a href="{{ route('articles-detail', $item->slug) }}" class="btn btn-secondary mt-3">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
