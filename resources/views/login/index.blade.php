@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 mt-5">
        <main class="form-signin mt-5">
            @if (session()->has('pesan'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    {{ session('pesan') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h1 class="h3 mb-3 fw-normal text-center ">Please log in</h1>
            <form action="/login" method="POST">
            @csrf
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </form>
            @can('admin')
                <small class="d-block text-center mt-3"> Not Register? <a href="/register" class="text-decoration-none"> Register Here </a></small>
            @endcan
        </main>
    </div>
</div>
@endsection
