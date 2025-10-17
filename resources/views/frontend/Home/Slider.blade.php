@foreach ($sliders as $slider)
<div class="header-carousel-item hero-section">
    <div class="hero-bg-half-1custom" style="background-image: url({{ asset('storage/' . $slider->image_link) }})"></div>
    <div class="hero-shape-1"></div>
    <div class="carousel-caption">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7 animated fadeInLeft">
                    <div class="text-sm-center text-md-start">
                        <h4 class="mb-4 text-white text-uppercase fw-bold">{{$slider->top_sub_heading}}</h4>
                        <h1 class="mb-4 text-white display-2">{{$slider->heading}}</h1>
                        <p class="mb-5 fs-5">{{$slider->bottom_sub_heading}}</p>
                        <div class="flex-shrink-0 mb-4 d-flex justify-content-center justify-content-md-start">
                            <a class="px-4 py-3 btn btn-light px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                            <a class="px-4 py-3 btn btn-primary px-md-5 ms-2" href="{{$slider->more_info_link}}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
