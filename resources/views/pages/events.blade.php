@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')
    {{-- header --}}

    <!-- Events Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
                <h1 class="mb-5">Watch Our Recent Events & Stories</h1>
            </div>
            <div class="row g-4 justify-content-center">
                {{-- 1 antony --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/Antony.mp4') }}" title="Event 1"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Antony Githinji</h5>
                            <p class="card-text">Ex-addict</p>
                        </div>
                    </div>
                </div>
                {{-- 2 patric --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/patric.mp4') }}" title="Event 2"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Patrick Njenga.</h5>
                            <p class="card-text">
                                Ex-drug dealer Patrick Njenga.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 3 ndugu --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/ndugu.mp4') }}" title="Event 3"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Joseph Ndung’u.</h5>
                            <p class="card-text">
                                Ex-Criminal
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 4 marian --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/marian.mp4') }}" title="Event 4"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Marian Wanjiru.</h5>
                            <p class="card-text">
                                Once-Teen Mother
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 5 jane --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/jane.mp4') }}" title="Event 5"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Jane Muthoni.</h5>
                            <p class="card-text">
                                Victim of Neglect
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 6 rhoda --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/home.mp4') }}" title="Event 6"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Rhoda Kibirithu.</h5>
                            <p class="card-text">
                                Director, Rehema Rescue CBO, Rhoda Kibirithu.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 7 new event --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/joseph.mp4') }}" title="Event 7"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Joseph Mogeto.</h5>
                            <p class="card-text">
                                Chairperson, Rehema Rescue CBO and Kiandutu Village.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 8 new event --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/cohorts.mp4') }}" title="Event 8"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Marian Wanjiku.</h5>
                            <p class="card-text">
                                Graduant, Rehema Rescue CBO.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>

        <div class="position-relative">
            <div class="position-relative">
                <img src="{{ asset('inc/heads.jpg') }}" alt="Background" class="img-fluid" style="width: 100%; height: auto; filter: brightness(20%);">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-blue opacity-30"></div>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle text-white">
               <p>Thika West Sub-County Government heads, Rehema Heads of Departments,
            Directors of Organizations, leaders and Clergy in the First Grand Graduation 2024.</p>
            </div>
        </div>
    </div>

    {{-- Gallery Start three images with title and caption --}}


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <img src="{{ asset('images/gallery1.jpg') }}" class="card-img-top" alt="Gallery Image 1">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Graduation</h5>
                            <p class="card-text">
                                Our 2024 male graduants.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card">
                        <img src="{{ asset('images/gallery2.jpg') }}" class="card-img-top" alt="Gallery Image 2">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Rehabilitation Programs</h5>
                            <p class="card-text">Providing essential rehabilitation services to those in need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card">
                        <img src="{{ asset('images/gallery3.jpg') }}" class="card-img-top" alt="Gallery Image 3">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Graduation Ceremony</h5>
                            <p class="card-text">
                                Our 2024 female graduants.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
