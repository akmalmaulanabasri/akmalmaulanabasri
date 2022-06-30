@extends('dashboard.layout.dashboard')
@section('dashboard')
    <div class="container">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Tambah Projek</h2>
            </div>
            <div class="card-body text-dark">
                <form action="{{ route('tambah-project-baru') }}" method="POST" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="judul">Judul Projek</label>
                    <input type="text" name="judul" id="judul" placeholder="Judul Projek"
                        class="form-control mb-2 @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
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

                    <label for="link">Link Website</label>
                    <input type="text" name="link" id="link" placeholder="Link Website"
                        class="form-control mb-2 @error('link') is-invalid @enderror" value="{{ old('link') }}">
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="repo">Repositori</label>
                    <input type="text" name="repo" id="repo" placeholder="Repositori"
                        class="form-control mb-2 @error('repo') is-invalid @enderror" value="{{ old('repo') }}">
                    @error('repo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="featured">Featured</label>
                    <select name="featured" id="featured" class="form-control mb-2 @error('featured') is-invalid @enderror"
                        value="{{ old('featured') }}">
                        <option value="">Pilih Featured</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                    @error('featured')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection()
