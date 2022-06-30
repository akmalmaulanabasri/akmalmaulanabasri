@extends('dashboard.layout.dashboard')
@section('dashboard')
    <div class="container">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Daftar User</h2>
                <div class="">
                    <a href="{{ route('tambah-project') }}" class="btn btn-success m-1">Tambah User</a>
                </div>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table border">
                        <tr>
                            <th>No</th>
                            <th>Usernamr</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td class="d-flex">
                                    <a href="#" class="btn btn-warning m-1">Edit</a>
                                    <a href="#" class="btn btn-danger m-1">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()
