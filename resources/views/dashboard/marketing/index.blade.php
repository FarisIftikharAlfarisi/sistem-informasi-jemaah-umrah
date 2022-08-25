@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Marketing</h1>
    </div>

    @if (session()->has('pesan'))
        <div class="col-lg-10 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="/register" class="btn btn-primary"> <span data-feather="folder-plus"></span> Tambah Data Marketing </a>
    <div class="table-responsive col-lg-10">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td class="text-center">#</td>
                    <td>Nama Marketing</td>
                    <td>Status</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            @foreach ($user as $users)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="fw-semibold"> {{ $users->name }}</td>
                <td class="fw-semibold">
                    @if ($users->is_admin==false)
                        Marketing
                        @else
                        Marketing Admin
                    @endif
                </td>
                <td class="text-center">
                    <form action="/dashboard/marketing/{{ $users->id }}" class="d-inline" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
