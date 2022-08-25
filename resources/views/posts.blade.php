@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2 mt-3">
            <div class="fs-3 mb-4"> {{ $title }} </div>
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('category'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mt-1">
                        <input type="text" class="form-control" placeholder="Search Post" name="search" value="{{ request('search') }}">
                        <button class="btn btn-danger text-white" type="submit" >Search</button>
                    </div>
                </form>
            </div>
            {{ $posts->links() }}
        </div>

        @if ($posts->count())
            <div class="card mb-3 text-dark p-2">
                @if ($posts[0]->image)
                <div style="max-height: 400px ; overflow:hidden;"></div>
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="my-2 img-fluid">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="top-picture">
                @endif
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                    <div class="fs-5">By. <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></div>
                    <div class="card-text">{{ $posts[0]->excerpt }}</div>
                    <div class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></div>
                </div>
                <div class="card-footer">
                    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary text-decoration-none"> Read More... </a>
                </div>
            </div>

        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2 bg-opacity-50"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" class="my-2 img-fluid">
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="kategori">
                    @endif
                    <div class="card-body">
                        <div class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></div>
                        <div class="card-text">{{ $post->excerpt }}</div>
                        <small class="text-dark"> By <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }} </a> In <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small>
                    </div>
                    <div class="card-footer">
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary" > Read More... </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @else
            <div class="text-center fs-4 text-muted">No Post Found</div>
        @endif

    </div>
@endsection
