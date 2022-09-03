@extends('layout.app')
@section('content')

<div class="container mt-3 text-center">
    <div class="card card-login">
        <div class="card-header">
            <h2>Welcome to Login Page</h2>
        </div>
        <div class="card-body">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-success">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="post" class="form-group mb-2">
                        @csrf
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" autofocus placeholder="Username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <label for="password" class="form-label mt-3">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        <input type="submit" value="Login" class="btn btn-secondary mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()