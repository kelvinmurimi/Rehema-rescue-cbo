@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')
       <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Events</p>
                <h1 class="display-6 mb-4">Be a Part of a Global Movement</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="event-item h-100 p-4">
                        <img class="img-fluid w-100 mb-4" src="{{asset('partners/p15.png')}}" alt="">
                        <a href="#" class="h3 text-color-primary d-inline-block">Actionchildren</a>
                        <p>.</p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="event-item h-100 p-4">
                        <img class="img-fluid w-100 mb-4" src="{{asset('partners/p10.png')}}" alt="">
                        <a href="#" class="h3 text-color-primary d-inline-block">Awareness Program</a>
                        <p>.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="event-item h-100 p-4">
                        <img class="img-fluid w-100 mb-4" src="{{asset('partners/p14.png')}}" alt="">
                        <a href="#" class="h3 text-color-primary d-inline-block">Health Care Program</a>
                        <p>.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="event-item h-100 p-4">
                        <img class="img-fluid w-100 mb-4" src="{{asset('partners/p12.png')}}" alt="">
                        <a href="#" class="h3 text-color-primary d-inline-block">Education Program</a>
                        <p>.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="event-item h-100 p-4">
                        <img class="img-fluid w-100 mb-4" src="{{asset('partners/p4.jpg')}}" alt="">
                        <a href="#" class="h3 text-color-primary d-inline-block">Awareness Program</a>
                        <p>.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="event-item h-100 p-4">
                        <img class="img-fluid w-100 mb-4" src="{{asset('partners/p5.png')}}" alt="">
                        <a href="#" class="h3 text-color-primary d-inline-block">Health Care Program</a>
                        <p>.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection