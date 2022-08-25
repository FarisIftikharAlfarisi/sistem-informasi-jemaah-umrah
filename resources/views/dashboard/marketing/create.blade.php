@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Marketing Baru</h1>
    </div>
    <div class="mt-3">
        <form action="/dashboard/marketing/create" method="POST" >
            @csrf
            <div class="row">
                <div class="fs-5 semibold mb-3"> Biodata Marketing </div>

                <div class="col-lg-4">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Nama pengguna" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Domisili Marketing" required value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" placeholder="No Telepon Marketing" required>
                    @error('no_telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button class="btn mt-3 btn-md btn-primary" type="submit"> <span data-feather="users"></span> Registration Account</button>
            <button class="btn mt-3 btn-md btn-danger" type="reset"> <span data-feather="refresh-cw"></span> Registration Account</button>
        </form>
    </div>
@endsection
