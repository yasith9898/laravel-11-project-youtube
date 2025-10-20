@extends('frontend.layouts.master')

@section('content')

 <!-- Modal Search Start -->
 <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="mx-auto input-group w-75 d-flex">
                    <input type="search" class="p-3 form-control" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="p-3 border btn bg-light nput-group-text"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->


<!-- Carousel Start -->
<div class="overflow-hidden header-carousel owl-carousel">
   @include('frontend.Home.Slider')
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="py-5 container-fluid about">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="mb-4 display-4">Providing you with the highest quality of features</h1>
                    <div class="mb-4 row g-4">
                        <div class="col-md-6">
                            <a href="#" class="d-flex">
                                <span class="fas fa-bolt fa-3x me-3"></span>
                                <h4 class="mb-0">Emergency Power Solution</h4>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-flex">
                                <span class="fas fa-broadcast-tower fa-3x me-3"></span>
                                <h4 class="mb-0">Full-Service Electrical Layout</h4>
                            </a>
                        </div>
                    </div>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus. At velit nam, animi culpa fugiat neque facere illum, eum possimus omnis accusantium deleniti consectetur temporibus necessitatibus asperiores sunt dicta?
                    </p>
                    <div class="mb-4 text-dark">
                        <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Installed, maintained and repaired lighting for clients.</p>
                        <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Increasingly popular way to generate electricity.</p>
                        <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Protect electrical devices from damage.</p>
                    </div>
                    <a class="px-4 py-3 btn btn-primary px-md-5 ms-2" href="#">Contact us</a>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="position-relative h-100">
                    <img src="{{asset('frontend/img/about-1.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                    <div class="bg-white">
                        <div class="pt-3 bg-white position-absolute" style="width: 50%; left: 0; bottom: 0;">
                            <div class="p-4 bg-primary">
                                <h4 class="mb-0 display-2">25+</h4>
                                <p class="mb-0 text-white fs-5">years of experience</p>
                            </div>
                        </div>
                        <div class="p-3 pb-0 bg-white position-absolute pe-0" style="width: 50%; bottom: 0; right: 0;">
                            <img src="{{asset('frontend/img/about-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Banner Start -->
 <div class="py-5 container-fluid banner wow zoomIn" data-wow-delay="0.2s">
    <div class="banner-design-1"></div>
    <div class="banner-design-2"></div>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="">
                    <h4 class="text-white">Contact With Me</h4>
                    <h1 class="mb-0 text-white display-4">We provide professional electric services for our customer</h1>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-lg-end h-100">
                    <a class="px-4 py-3 btn btn-primary px-md-5 ms-2" href="#">EXPLORE MORE</a>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Banner End -->


<!-- Services Start -->
<div class="py-5 container-fluid service">
    <div class="container py-5">
        <div class="mx-auto mb-5 text-center d-flex flex-column wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="mb-4 display-4">The Best Service For You</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, deserunt provident ab voluptates rerum eaque eum magni autem atque in minus laboriosam corrupti deleniti voluptatibus rem reiciendis modi veniam animi?
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <ul class="nav">
                    <li class="mb-4 nav-item me-lg-0">
                        <a class="px-5 py-3 active" data-bs-toggle="pill" href="#ServiceTab-1">
                            <span>Commercial</span>
                        </a>
                    </li>
                    <li class="mb-4 nav-item me-lg-0">
                        <a class="px-5 py-3" data-bs-toggle="pill" href="#ServiceTab-2">
                            <span>Residential</span>
                        </a>
                    </li>
                    <li class="mb-4 nav-item me-lg-0 mb-lg-0">
                        <a class="px-5 py-3" data-bs-toggle="pill" href="#ServiceTab-3">
                            <span>Industrial</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                <div class="tab-content">
                    <div id="ServiceTab-1" class="p-0 tab-pane fade show active">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="{{asset('frontend/img/commercial-1.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Brite Spark Services</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('frontend/img/commercial-2.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Energy Ease Packages</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('img/commercial-3.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Electra Care Packages</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ServiceTab-2" class="p-0 tab-pane fade show">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="img/residential-1.jpg" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Electrical Services</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/residential-2.jpg" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Security Systems</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/residential-3.jpg" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Air Conditioner</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ServiceTab-3" class="p-0 tab-pane fade show">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="img/industrial-1.jpg" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Factory Manufacture</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/industrial-2.jpg" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">General Electrical</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/industrial-3.jpg" class="img-fluid w-100" alt="">
                                <div class="p-4 border border-top-0">
                                    <h4 class="mb-3">Electrical Planing</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="px-4 py-2 btn btn-primary" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->




<!-- Team Start -->
 <div class="pb-5 container-fluid team">
    <div class="container pb-5">
        <div class="mx-auto mb-5 text-center d-flex flex-column wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Team</h4>
            <h1 class="mb-4 display-4">Electricity Service offerings</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, deserunt provident ab voluptates rerum eaque eum magni autem atque in minus laboriosam corrupti deleniti voluptatibus rem reiciendis modi veniam animi?
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center team-content bg-light">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center team-content bg-light">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center team-content bg-light">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            <a class="mb-2 btn btn-square btn-primary" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="p-4 text-center team-content bg-light">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Team End -->


<!-- Testimonial Start -->

@include('frontend.Home.testimonial')
