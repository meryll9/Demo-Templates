@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="bg-transparent">

        <div class="container clearfix">
            <h1>Doctors</h1>
            <span>A Short Page Title Tagline</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row justify-content-center col-mb-50 mb-0">
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/1.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. John Doe</h4>
                                    </a>
                                    <a href="#"><span>Cardiologist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/2.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Bryan Mcguire</h4>
                                    </a>
                                    <a href="#"><span>Orthopedist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/3.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Mary Jane</h4>
                                    </a>
                                    <a href="#"><span>Neurologist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/4.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Silvia Bush</h4>
                                    </a>
                                    <a href="#"><span>Dentist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/6.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Hugh Baldwin</h4>
                                    </a>
                                    <a href="#"><span>Cardiologist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/7.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Erika Todd</h4>
                                    </a>
                                    <a href="#"><span>Neurologist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/8.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Randy Adams</h4>
                                    </a>
                                    <a href="#"><span>Dentist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="team">
                            <div class="team-image">
                                <img src="{{asset('medical/demos/medical/images/doctors/9.jpg')}}" alt="Dr. John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <a href="#">
                                        <h4>Dr. Alan Freeman</h4>
                                    </a>
                                    <a href="#"><span>Eye Specialist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="promo promo-dark promo-full promo-uppercase bg-color footer-stick p-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3 style="letter-spacing: 2px;">Get the Best Care for your Loved Ones</h3>
                            <span class="nott">We strive to provide Our Customers with Top Notch Support to make
                                their Theme</span>
                        </div>
                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                            <a href="#"
                                class="button button-large button-border button-rounded button-light button-white m-0">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
