@extends('layouts.Template')
@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('img/banner-image-1-1920x300.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>About us</h4>
                            <p>Ngantor is Indonesia-based online employment website that provide compatible job matching feature and professional learning platforms for jobseekers as well as job posting platforms and effective recruitment system for recruiters (companies)..<br><br></p>

                            <p>Ngantor is a career development and recruitment platfo rm that has a dream to become the largest in Southeast Asia. Established in 2021 in Indonesia, Glints has a vision to help more than 1 million Freshgraduates to help build their potential. Every day, we help connect candidates with suitable job opportunities..</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{url('img/about-1-720x480.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                      <div class="section-heading">
                          <span>Quotes.</span>
                          <h2>Napoleon Hill</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <p class="lead">Patience, persistence and perspiration make an unbeatable combination for success</p>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>
    </main>

@endsection
