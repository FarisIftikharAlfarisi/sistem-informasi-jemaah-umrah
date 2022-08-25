@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="fs-4 mt-3 text-center"> Post Category </div>
        <hr>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category=/{{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <div class="card-title text-center flex-fill p-4 bg-dark bg-opacity-50">{{ $category->name }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
