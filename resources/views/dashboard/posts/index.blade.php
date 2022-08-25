@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts Of {{ auth()->user()->name }}</h1>
    </div>

    @if (session()->has('pesan'))
        <div class="col-lg-10 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($posts->count())
    <div class="table-responsive col-lg-10">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post </a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="book-open"></span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-primary"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Delete Post?')"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    @else
        <div class="col-lg-10">
            <h4 class="text-muted text-center">Anda belum memiliki konten</h4>
            <h5 class="text-muted text-center"> Ayo <a href="/dashboard/posts/create"> buat postingan </a> </h5>
        </div>
    @endif
@endsection
