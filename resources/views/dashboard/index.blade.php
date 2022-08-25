@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hello {{ auth()->user()->name }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card mt-3 bg-danger text-white">
                <div class="card-title text-center mt-2 h5"> Jumlah Jemaah </div>
                <div class="card-body text-center fs-1 semibold ">
                    50
                </div>
                <div class="card-footer">
                    <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus laudantium eligendi ipsam iste similique beatae!</small>
                </div>
            </div>
        </div>
    </div>
@endsection
