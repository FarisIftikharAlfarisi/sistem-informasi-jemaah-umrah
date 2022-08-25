@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="mt-3">
                    <div class="fs-3"> {{ $post->title }}</div>
                    <small>By <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></small>
                    <img class="my-2 img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="kategori">
                    <article class="my-3">
                        <div class="fs-5 lead"> {!! $post->content !!} </div>
                    </article>
                </div>
                <a href="/posts" class="btn btn-primary p-2 mt-4"> Back </a>
            </div>
        </div>
    </div>
@endsection
