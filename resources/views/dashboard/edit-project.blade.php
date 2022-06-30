@extends('dashboard.layout.dashboard')
@section('dashboard')

<div class="container">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Edit Projek</h2>
        </div>
        <div class="card-body text-dark">
            <form action="{{ route('edit-project', $data->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                <label for="judul">Judul Projek</label>
                <input type="text" name="judul" id="judul" placeholder="Judul Projek" class="form-control mb-2 @error('judul') is-invalid @enderror" value="{{ $data->judul }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="gambar">Gambar</label>
                <div class="">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    @if($data->gambar != null)
                        <p type="button" data-toggle="modal" data-target="#imagepPreview{{ $data->id }}" class="btn btn-secondary"><i class="bi bi-eye"></i> View Image</p>
                    @else
                        <p class="">No Image</p>
                    @endif
                </div>
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="hapusGambar" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Hapus Gambar
                    </label>
                  </div>

                <label for="link">Link Website</label>
                <input type="text" name="link" id="link" placeholder="Link Website" class="form-control mb-2 @error('link') is-invalid @enderror" value="{{ $data->link }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="repo">Repositori</label>
                <input type="text" name="repo" id="repo" placeholder="Repositori" class="form-control mb-2 @error('repo') is-invalid @enderror" value="{{ $data->repo }}">
                @error('repo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="featured">Featured</label>
                <select name="featured" id="featured" class="form-control mb-2 @error('featured') is-invalid @enderror" value="{{ old('featured') }}">
                    <option value="{{ $data->featured  }}">@if($data->featured) Ya @else Tidak @endif </option>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
                @error('featured')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('showcase-project') }}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="imagepPreview{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="imagepPreviewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imagepPreviewLabel">Gambar {{ $data->judul }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <img src="{{ asset('storage') }}/{{ $data->gambar }}" class="img-fluid border shadow" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



@endsection()