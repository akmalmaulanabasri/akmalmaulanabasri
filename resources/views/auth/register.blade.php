@extends('layout.app')
@section('content')

<div class="container mt-3 text-center">
    <div class="card card-login">
        <div class="card-header">
            <h2>Welcome to Register Page</h2>
        </div>
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <form action="{{ route('add-account') }}" method="post" class="form-group mb-2">
                        @csrf
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <label for="email" class="form-label  mt-3">Email</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <label for="username" class="form-label  mt-3">Username</label>
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <label for="password" class="form-label mt-3">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <input type="submit" value="Register" class="btn btn-secondary mt-3">
                        <input type="reset" value="Reset" class="btn btn-muted text-light border mt-3">
                    </form>
                    <small>Have an Account? <a href="{{ route('login-page') }}">Login Here!</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()