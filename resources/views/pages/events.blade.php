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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/antony.mp4') }}" title="Event 1"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> Antony Githinji</h5>
                            <p class="card-text">Ex-addict</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/home2.mp4') }}" title="Event 2"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Patrick Njenga.</h5>
                            <p class="card-text">
                                Ex-drug dealer Patrick Njenga.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <video controls src="{{ asset('videos/ndugu.mp4') }}" title="Event 3"></video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Joseph Ndung’u.</h5>
                            <p class="card-text">
                                Ex-Criminal
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->
@endsection