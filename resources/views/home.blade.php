@extends('layouts.main')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="true">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active d-flex">
            <img src="https://source.unsplash.com/1800x600/?mecca" class="d-block" alt="...">
            <div class="carousel-caption mb-5 d-flex flex-fill bg-dark bg-opacity-50 flex-column align-items-center">
                <h5 class="lead">Assakinah Insani Tour Bandung</h5>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1800x600/?arab" class="d-block" alt="...">
            <div class="carousel-caption mb-5 d-flex flex-fill bg-dark bg-opacity-50 flex-column align-items-center">
                <h5 class="lead">Assakinah Insani Tour Bandung</h5>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1800x600/?muslim" class="d-block" alt="...">
            <div class="carousel-caption mb-5 d-flex flex-fill bg-dark bg-opacity-50 flex-column align-items-center">
                <h5 class="lead">Assakinah Insani Tour Bandung</h5>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima.</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-5">
        {{-- <div class="fs-6 mt-3"> <a href="/categories"> All Category </a> </div> --}}
        <div class="row text-center">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-title fw-semibold fs-5 mt-md-3 "> Assakinah Insani Tour</div>
                    <div class="card-body">
                        <div class="fs-6 lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ea doloribus molestias molestiae laborum ducimus cumque nostrum deleniti officiis voluptates architecto tenetur et quis ipsam, sit repellat natus magni aperiam repellendus iusto impedit eaque? Error ducimus non dolore at atque.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-title fw-semibold fs-5 mt-md-3"> Assakinah Insani Tour</div>
                    <div class="card-body">
                        <div class="fs-6 lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ea doloribus molestias molestiae laborum ducimus cumque nostrum deleniti officiis voluptates architecto tenetur et quis ipsam, sit repellat natus magni aperiam repellendus iusto impedit eaque? Error ducimus non dolore at atque.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-title fw-semibold fs-5 mt-md-3 "> Assakinah Insani Tour</div>
                    <div class="card-body">
                        <div class="fs-6 lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ea doloribus molestias molestiae laborum ducimus cumque nostrum deleniti officiis voluptates architecto tenetur et quis ipsam, sit repellat natus magni aperiam repellendus iusto impedit eaque? Error ducimus non dolore at atque.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-title fw-semibold fs-5 mt-md-3"> Assakinah Insani Tour</div>
                    <div class="card-body">
                        <div class="fs-6 lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ea doloribus molestias molestiae laborum ducimus cumque nostrum deleniti officiis voluptates architecto tenetur et quis ipsam, sit repellat natus magni aperiam repellendus iusto impedit eaque? Error ducimus non dolore at atque.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    @include('footer')
@endsection
