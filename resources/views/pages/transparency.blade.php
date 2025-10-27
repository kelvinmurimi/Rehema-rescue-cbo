@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">TRANSPARENCY AND MANAGEMENT
            MANAGEMENT.</p>
        <h6 class="display-7 mb-5">Our management and governance is well-structured to promote sound leadership and
            accountability in accordance with Article 10 and Article 32 of The Constitution of Kenya
            and The PBO Act of 2013.</h6>

    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <!-- The Executive Board -->
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="display-7 mb-5 text-secondary">The Executive Board</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <img class="img-fluid rounded-circle mb-4" src="{{asset('team/rhoda.jpeg')}}" alt="Team Member">
                        <h5 class="mb-1">Rhoda Kabirithu</h5>
                        <span class="role">Board Member</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-card">
                        <img class="img-fluid rounded-circle mb-4" src="{{asset('team/joseph.jpeg')}}" alt="Team Member">
                        <h5 class="mb-1">Joseph mogeto</h5>
                        <span class="role">Board Member</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card">
                        <img class="img-fluid rounded-circle mb-4" src="{{asset('team/groupb.jpeg')}}" alt="Team Member">
                        <h5 class="mb-1">Executive Members</h5>
                        <span class="role">Board Member</span>
                    </div>
                </div>
            </div>

            <!-- Add other team sections here following the same structure -->

        </div>
    </div>

    <style>
        .team-card {
            text-align: center;
            padding: 2rem 1.5rem;
            background-color: #fff;
            border-radius: .5rem;
            border: 1px solid #f0f0f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .team-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #f8f9fa;
        }

        .team-card .role {
            color: var(--bs-primary);
            font-weight: 600;
        }
    </style>
@endsection
