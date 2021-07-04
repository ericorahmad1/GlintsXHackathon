@extends('layouts.Template')
@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-2-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Team</h2>
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
                                    <img src="{{url('img/team-image-1-646x680.jpg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Kukuh</h4>
                                    <span>CEO</span>
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
                                    <img src="{{url('img/team-image-2-646x680.jpg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Jane Doe</h4>
                                    <span>Marketing Manager</span>
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
                                    <img src="{{url('img/team-image-3-646x680.jpg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Paula Jeorge</h4>
                                    <span>Customer Service</span>
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
                                    <img src="{{url('img/team-image-4-646x680.jpg')}}" alt="">
                                </div>
                                <div class="text-content">
                                    <h4>Dan Blatan</h4>
                                    <span>Customer Service</span>
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
                          <h2>NGANTOR TIM</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi blanditiis, esse deserunt assumenda! Tempora nulla natus illum soluta quasi, nisi, in quaerat cumque corrupti ipsum impedit necessitatibus expedita minus harum, fuga id aperiam autem architecto odio. Perferendis eius possimus ex itaque tenetur saepe id quis dicta voluptas, corrupti sapiente hic!</p>
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
                    <a href="{{url('contact')}}">Kontak kami.</a>
                </div>
            </div>
        </section>
    </main>


@endsection
