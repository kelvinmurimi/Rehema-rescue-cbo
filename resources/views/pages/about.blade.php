@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h1 class="display-5 mb-4">Welcome to <span class="text-primary">Rehema Rescue CBO</span></h1>
                        <p>“Rehema Rescue CBO” is a Charitable Organization in Thika, Kiambu County, Kenya. Officially
                            founded on April 2018 and fully registered by the Directorate of Social Development pursuant and
                            in accordance with the provision of Community Groups Registration Act, NO.30 of 2022, under
                            Registration NO. DSD/22/114/02/96102.
                        </p>


                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="ratio ratio-16x9">
                        <video controls src="{{ asset('videos/home.mp4') }} "></video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    {{-- Our beneficiaries --}}
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-title">
                        <h3 class="display-7 mb-4">Our Beneficiaries.</h3>
                        <p class="fs-5 mb-0">We work to bring smiles, hope, and a brighter future to those in need.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row g-5">
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-droplet fa-2x text-secondary"></i>
                                </div>
                                <h3>Orphans and Vulnerable Children:</h3>
                                <p class="mb-2">Orphans, teen mothers and fathers, children of very poor
                                    households.</p>
                                {{--  <a href="">Read More</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-hospital fa-2x text-secondary"></i>
                                </div>
                                <h3>Children with Special Needs:</h3>
                                <p class="mb-2">Children/ Persons Living with Disabilities, Autistic, Special
                                    children{{--  --}}.</p>
                                {{--  <a href="">Read More</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-hands-holding-child fa-2x text-secondary"></i>
                                </div>
                                <h3>Chronically Sick:</h3>
                                <p class="mb-2">People living with HIV/ AIDS.</p>
                                {{--  <a href="">Read More</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-bowl-food fa-2x text-secondary"></i>
                                </div>
                                <h3>Drugs and Substance Abuse Victims:</h3>
                                <p class="mb-2">Drug and alcohol addicts.</p>
                                {{--  <a href="">Read More</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-school-flag fa-2x text-secondary"></i>
                                </div>
                                <h3>Victims of SGBV:</h3>
                                <p class="mb-2">Children and youths who are faced with sexual and gender based violence;
                                    physical and mental.</p>
                                {{--  <a href="">Read More</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-home fa-2x text-secondary"></i>
                                </div>
                                <h3>Victims of Neglect: </h3>
                                <p class="mb-2">Teen mothers and fathers, the elderly and marginalized communities.</p>
                                {{-- <a href="">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Our beneficiaries End --}}
    @include('inc.counter')
    @include('inc.beneficiaries')
@endsection
