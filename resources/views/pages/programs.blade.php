@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')

    <!-- Programs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Programs</p>
                <h6 class="display-7 mb-5">Our program’s delivery and effectiveness are qualitatively and quantitatively
                    assessed through
                    structured beneficiary surveys, focus-group discussions, Key Informant Interviews (KIIs) with
                    stakeholders, review of school and institutional records.</h16>
            </div>

            <!-- Program 1: Image Left, Text Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('inc/graduation.png') }}" alt="Education Program"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="mb-3">Education & Mentorship</h3>
                    <p class="mb-4">
                        Since 2018, Out of 455 rescued individuals, 420 have been successfully enrolled back to school
                        through Scholarships, Bursaries and Child Support..
                        .</p>
                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                </div>
            </div>

            <!-- Program 2: Text Left, Image Right -->
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3">Health & Nutrition</h3>
                    <p class="mb-4">
                        Through feeding programs, food donations, hospital referral systems and medical aid,
                        415 lives
                        have been directly impacted. With 72.3% being children aged below 12years...</p>
                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('inc/Christmas.jpg') }}" alt="Health Program"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Programs End -->
@endsection
