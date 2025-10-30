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
                            <h5 class="card-title"> Antony Githinji</h5>
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
                            <h5 class="card-title">Patrick Njenga.</h5>
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
                            <h5 class="card-title">Joseph Ndung’u.</h5>
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
                            <h5 class="card-title">Marian Wanjiru.</h5>
                            <p class="card-text">
                               Once-Teen Mother
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->
@endsection