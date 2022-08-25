@extends('dashboard.layouts.main')

@section('container')
<div class="row my-3">
    <div class="col-lg-8">
        <div class="mt-3">
            <a href="/dashboard/posts" class="my-2 btn btn-success"> <span data-feather="arrow-left"></span> Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="my-2 btn btn-primary text-white"> <span data-feather="pen-tool"></span> Edit </a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Delete Post?')"><span data-feather="trash-2"></span> Delete</button>
            </form>
            <div class="fs-2"> {{ $post->title }}</div>
            @if ($post->image)
            <div style="max-height: 350px ; overflow:hidden;"></div>
                <img src="{{ asset('storage/'.$post->image) }}" class="my-2 img-fluid">
            @else
                <img class="my-2 img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="kategori">
            @endif
            <article class="my-3">
                <div class="fs-5 lead"> {!! $post->content !!} </div>
            </article>
        </div>
    </div>
</div>
@endsection
