@extends('layouts.Template')
@section('content')

<section class="banner" id="top" style="background-image:url('{{asset('img/homepage-banner-image-1920x700.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>The Future of Job Search and Career Development</h2>
                        <!-- Job Search Form -->
                        <div class="job-search-form wow fadeInUp" data-wow-delay="1000ms">
                            <form method="POST" action="#">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <span class="icon flaticon-search-1"></span>
                                        <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                                        <span class="icon flaticon-map-locator"></span>
                                        <input type="text" name="field_name" placeholder="City or postcode">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-12 col-sm-12 category">
                                        <span class="icon flaticon-briefcase"></span>
                                        <select class="chosen-select">
                                            <option value="">All Categories</option>
                                            <option value="44">Accounting / Finance</option>
                                            <option value="106">Automotive Jobs</option>
                                            <option value="46">Customer</option>
                                            <option value="48">Design</option>
                                            <option value="47">Development</option>
                                            <option value="45">Health and Care</option>
                                            <option value="105">Marketing</option>
                                            <option value="107">Project Management</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                                        <button type="submit" class="theme-btn btn-style-two">Find Jobs</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Job Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="left-content">
                            <br>
                            <h4>About us</h4>
                            <p>Ngantor is Indonesia-based online employment website that provide compatible job matching feature and  professional learning platforms for jobseekers as well as job posting platforms and effective recruitment system for recruiters (companies).</p>
                            <div class="blue-button">
                                <a href="{{url('home/about-us')}}">More...</a>
                            </div>

                            <br>
                        </div>
                    </div>
                    <!-- <div class="col-md-5">
                        <img src="{{url('img/about-1-720x480.jpg')}}" class="img-fluid" alt="">
                    </div> -->
                </div>
            </div>
        </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <!-- Features Jobs -->
                            <span>Most Popular jobs in 2021</span>
                            <h2>See whats in the needs in 2021.</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/blog-1-720x480.jpg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i> Ngantor Teams</strong> &nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;
                                 <strong title="Views"><i class="fa fa-map-marker"></i> Indonesia</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Everything You Need To Know About the Role of an AI Engineer</h4>

                                <p>The ever-developing field of technology is full of exciting and innovative career opportunities. Artificial intelligence (AI) engineering is a fast-growing industry that can provide you with new challenges and endless opportunities for professional development. In this article, we explain what an AI engineer is, explore some of their responsibilities, detail the importance of this role and list the steps you can take to become an artificial intelligence engineer.</p>

                                <div class="text-button">
                                    <a href="{{url('home/blog-details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/blog-2-720x480.jpg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i> Ngantor Teams</strong> &nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020</strong> &nbsp;
                                 <strong title="Views"><i class="fa fa-map-marker"></i> Indonesia</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>What is a Data Scientist</h4>

                                <p>Data scientists are big data wranglers, gathering and analyzing large sets of structured and unstructured data. A data scientist’s role combines computer science, statistics, and mathematics. They analyze, process, and model data then interpret the results to create actionable plans for companies and other organizations.</p>

                                <div class="text-button">
                                    <a href="{{url('blog-details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/blog-3-720x480.jpg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i>Ngantor Teams</strong> &nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020</strong>
                                 <strong title="Views"><i class="fa fa-map-marker"></i> Indonesia</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>What is full stack development?</h4>

                                <p>Full stack development: It refers to the development of both front end(client side) and back end(server side) portions of web application. Full stack web Developers: Full stack web developers have the ability to design complete web application and websites. They work on the frontend, backend, database and debugging of web application or websites.</p>

                                <div class="text-button">
                                    <a href="{{url('blog-details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/product-4-720x480.jpg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <p> Medical / Health Jobs</p>

                                <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                <div class="text-button">
                                    <a href="{{url('home/job-details')}}">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/product-5-720x480.jpg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <p> Medical / Health Jobs</p>

                                <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                <div class="text-button">
                                    <a href="{{url('home/job-details')}}">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/product-6-720x480.jpg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <p> Medical / Health Jobs</p>

                                <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                <div class="text-button">
                                    <a href="{{url('home/job-details')}}">View More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Career Tips & Tricks</span>
                            <h2>Get Tips for Career Accelaration from Professional</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/10-ways.jpeg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i> Ngantor Teams</strong> &nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;
                                 <strong title="Views"><i class="fa fa-map-marker"></i> Indonesia</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>10 Ways to Work From Home Better</h4>

                                <p>TEMPO.CO, Jakarta - The pandemic has made a lot of people resort to working from home. Many are not doing very well at it, struggling to set up their schedule.</p>

                                <div class="text-button">
                                    <a href="{{url('home/blog-details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/Ultimate-guide.jpeg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i> Ngantor Teams</strong> &nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020</strong> &nbsp;
                                 <strong title="Views"><i class="fa fa-map-marker"></i> Indonesia</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>The Ultimate Guide to Finding a New Job Fast & Efficiently</h4>

                                <p>Medium.com, Kyiv - Due to COVID-19 many people have lost their job. Together with experts from different fields we created the ultimate guide to maximize your chances of finding your next job as fast as possible.</p>

                                <div class="text-button">
                                    <a href="{{url('blog-details')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{url('img/4-ways.jpeg')}}" alt="">
                                </div>

                                <div class="overlay-content">
                                 <strong title="Author"><i class="fa fa-user"></i>Ngantor Teams</strong> &nbsp;
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020</strong>
                                 <strong title="Views"><i class="fa fa-map-marker"></i> Indonesia</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>4 Ways to Get a Job amid Covid-19 Pandemic</h4>

                                <p>TEMPO.CO, Jakarta - The Covid-19 pandemic has hit hard many sectors, including the economy. Several companies cannot run optimal operations and are forced to lay off their workers. </p>

                                <div class="text-button">
                                    <a href="{{url('blog-details')}}">Read More</a>
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
                          <span>Contact Us</span>
                          <h2>Do you need further questions?</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="blue-button">
                        <a href="{{url('contact')}}">Contact to us</a>
                      </div>
                </div>
            </div>
        </section>

        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Meet our Managerials Team</span>
                            <h2>See the people behind Ngantor</h2>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/Kukuh.jpeg')}}" alt="">
                            <div class="text-content">
                                <h4>Kukuh</h4>
                                <span>"Project Captain Ngantor Team."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/Vanya.jpeg')}}" alt="">
                            <div class="text-content">
                                <h4>Vannya</h4>
                                <span>"Finance Consultant."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/Eric.jpeg')}}" alt="">
                            <div class="text-content">
                                <h4>Erico</h4>
                                <span>"Web Developer."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/Echa.jpeg')}}" alt="">
                            <div class="text-content">
                                <h4>Tresya Pricillia</h4>
                                <span>"Design Strategiest."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/popular_item_5.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Tayib Wini</h4>
                                <span>"Strategist Lead."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/popular_item_1.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Ngantor Teams</h4>
                                <span>"Intern."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="{{url('img/popular_item_2.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Ngantor Teams</h4>
                                <span>"Interen."</span>
                            </div>
                            <div class="plus-button">
                                <a href="{{url('testimonials')}}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
