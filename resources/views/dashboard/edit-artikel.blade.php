@extends('dashboard.layout.dashboard')
@section('dashboard')
    <div class="container">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Tambah Artikel</h2>
            </div>
            <div class="card-body text-dark">
                <form action="{{ route('edit-artikel', $artikel->id) }}" method="POST" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="judul">Judul Artikel</label>
                    <input type="text" name="judul" id="judul" placeholder="Judul Artikel"
                        class="form-control mb-2 @error('judul') is-invalid @enderror" value="{{ old('judul', $artikel->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="gambar">Gambar</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="kategori">Kategori Artikel</label>
                    <input type="text" name="kategori" id="kategori" placeholder="Kategori Artikel"
                        class="form-control mb-2 @error('kategori') is-invalid @enderror" value="{{ old('kategori', $artikel->kategori) }}">
                    @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="penulis">Penulis</label>
                    <input type="text" name="penulis" id="penulis" placeholder="Penulis"
                        class="form-control mb-2 @error('penulis') is-invalid @enderror" value="{{ old('penulis', $artikel->penulis) }}">
                    @error('penulis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        <label for="artikel">Artikel</label>
                        <input id="artikel" type="hidden" name="artikel" value="{{ old('artikel', $artikel->artikel) }}">
                        <trix-editor input="artikel" class="form-contsrol mb-2"></trix-editor>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection()
