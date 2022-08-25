@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="h1">Add New Category</div>
    </div>

    <form action="/dashboard/categories" method="POST">
        @csrf
        <div class="col-lg-6 mb-3">
            <label for="Category Name" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror"  name="name" id="name" value="{{ old('name') }}"required>
        </div>
        @error('name')
            <div class="invalid-feedback">
                <small>{{ $message }}</small>
            </div>
        @enderror
        <div class="col-lg-6">
            <input type="text" class="form-control @error('slug') is-invalid @enderror mb-3" name="slug" id="slug" >
        </div>
        @error('slug')
            <div class="invalid-feedback">
                <small>{{ $message }}</small>
            </div>
        @enderror
        <button class="btn btn-primary" type="submit"> <span data-feather="check-square"></span> Add Category </button>
    </form>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change',function(){
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script>

@endsection
