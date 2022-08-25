@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
              @error('title')
                <div class="invalid-feedback">
                    <small> {{ $message }} </small>
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug">
                @error('slug')
                <div class="invalid-feedback">
                    <small> {{ $message }} </small>
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label"> Post Category </label>
                <select class="form-select" name="category_id">
                    <option selected> select category </option>
                    @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }} selected">{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <img class="img-preview img-fluid my-3 col-sm-5" >
                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Description / Content </label>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                <trix-editor input="content"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
          </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change',function(){
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept',function(e){
            e.preventDevault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFreader = new FileReader();
            oFreader.readAsDataURL(image.files[0]);

            oFreader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

        </script>

@endsection
