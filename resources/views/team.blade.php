@extends('layouts.Template')
@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('img/banner-image-2-1920x300.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Meet Our Managerials Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

<main>
        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/Kukuh.jpeg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Kukuh Utama</h4>
                                    <span>Project Captain Team</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/Vanya.jpeg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Vanya Surya</h4>
                                    <span>Finance Consultant</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/Echa.jpeg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Tresya Pricillia</h4>
                                    <span>Design Strategist</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/Tayib.jpg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Tayib Wini</h4>
                                    <span>Strategist Lead</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item popular-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/Eric.jpeg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Erico Rahmad Darmanto</h4>
                                    <span>Web Developer</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                      <div class="section-heading">
                          <span>Glints X Hackathon</span>
                          <h2>NGANTOR TEAM</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <p class="lead">Change your thinking, and you will change your life - Brian Tracy</p>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>

        <section class="popular-places">
            <div class="container text-center">
                <h4>Hubungi kita jika ingin tau lebih lanjut.</h4>

                <br>

                <div class="blue-button">
                    <a href="{{url('contact')}}">Contact Us.</a>
                </div>
            </div>
        </section>
    </main>


@endsection
