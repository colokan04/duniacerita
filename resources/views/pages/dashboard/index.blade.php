@extends('layouts/master')
@section('content')

<style>
    img { width: 100%; }
</style>

<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner" style="height: 250px">
            @foreach($sliders as $slider)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="slider-image text-center">
                        <img src="{{  asset('images/'.$slider->image) }}" class="d-inline-block text-center" alt="{{ $slider->image }}">
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</section>

<main id="main" data-aos="fade" data-aos-delay="1500">

    <section id="services" class="services">
        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex">
                    <div class="service-item position-relative">
                        <i class="bi bi-activity"></i>
                        <h4><a href="" class="stretched-link">Judul Novel 1</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex">
                    <div class="service-item position-relative">
                        <i class="bi bi-bounding-box-circles"></i>
                        <h4><a href="" class="stretched-link">Judul Novel 2</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex">
                    <div class="service-item position-relative">
                        <i class="bi bi-calendar4-week"></i>
                        <h4><a href="" class="stretched-link">Judul Novel 3</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex">
                    <div class="service-item position-relative">
                        <i class="bi bi-broadcast"></i>
                        <h4><a href="" class="stretched-link">Judul Novel 4</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
                <!-- End Service Item -->

            </div>

        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="row gy-4 justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-1.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{ asset('duniacerita/img/gallery/gallery-1.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-2.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                        <a href="{{ asset('duniacerita/img/gallery/gallery-2.jpg') }}" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-3.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{ asset('duniacerita/img/gallery/gallery-3.jpg') }}" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-4.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{ asset('duniacerita/img/gallery/gallery-4.jpg') }}" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-5.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{ asset('duniacerita/img/gallery/gallery-5.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-6.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                        <a href="{{ asset('duniacerita/img/gallery/gallery-6.jpg') }}" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-7.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{ asset('duniacerita/img/gallery/gallery-7.jpg') }}" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('duniacerita/img/gallery/gallery-8.jpg') }}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{ asset('duniacerita/img/gallery/gallery-8.jpg') }}" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

@endsection
