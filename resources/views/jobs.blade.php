@extends('layouts.Template')
@section('content')
<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('img/banner-image-1-1920x300.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Jobs</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>

        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Search Jobs</h2>
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Result Type:</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Any" style="width: 100%;">
                                        <option>Text only</option>
                                        <option>Images</option>
                                        <option>Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Sort Order:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Order By:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>Title</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="Lorem ipsum">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <form action="#">
                         <h4 style="margin-bottom: 15px">Type</h4>
                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Contract (5)</span>
                              </label>
                         </div>
                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Full time (5)</span>
                              </label>
                         </div>
                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Internship (5)</span>
                              </label>
                         </div>

                         <br>

                         <h4 style="margin-bottom: 15px">Category</h4>
                         <div>
                              <label>
                                   <input type="checkbox">
                                   <span>Accounting / Finance / Insurance Jobs (15)</span>
                              </label>
                         </div>
                         <div>
                              <label>
                                   <input type="checkbox">
                                   <span>Development / Designer / Data Science (5)</span>
                              </label>
                         </div>
                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Location (9)</span>
                              </label>
                         </div>

                         <br>

                         <h4 style="margin-bottom: 15px">Career levels</h4>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Intermediate Level (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Expert Level (5)</span>
                              </label>
                         </div>

                         <br>

                         <h4 style="margin-bottom: 15px">Education levels</h4>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Bachelor Degree (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Master Degree (5)</span>
                              </label>
                         </div>

                         <br>


                         <h4 style="margin-bottom: 15px">Years of experience</h4>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 3 (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 5 (5)</span>
                              </label>
                         </div>
                        </form>
                    </div>

                    <div class="col-md-8 col-xs-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="thumb">
                                        <div class="thumb-img">
                                            <img src="{{url('img/product-1-720x480.jpg')}}" alt="">
                                        </div>

                                        <div class="overlay-content">
                                         <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                         <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                                        </div>
                                    </div>

                                    <div class="down-content">
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                        <p> Cooking / Culiner Jobs</p>

                                        <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                        <div class="text-button">
                                            <a href="{{url('home/job-details')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="thumb">
                                        <div class="thumb-img">
                                            <img src="{{url('img/product-2-720x480.jpg')}}" alt="">
                                        </div>

                                        <div class="overlay-content">
                                         <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                         <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                                        </div>
                                    </div>

                                    <div class="down-content">
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                        <p> Civil / Mechanical Jobs</p>

                                        <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                        <div class="text-button">
                                            <a href="{{url('home/job-details')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="thumb">
                                        <div class="thumb-img">
                                            <img src="{{url('img/product-3-720x480.jpg')}}" alt="">
                                        </div>

                                        <div class="overlay-content">
                                         <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                         <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                                        </div>
                                    </div>

                                    <div class="down-content">
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                        <p> Teacher / Education Jobs</p>

                                        <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                        <div class="text-button">
                                            <a href="{{url('home/job-details')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
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

                                        <p> Mechanical / Engineering Jobs</p>

                                        <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                        <div class="text-button">
                                            <a href="{{url('job-details')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
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

                                        <p> Firefighter / Goverment Jobs</p>

                                        <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                        <div class="text-button">
                                            <a href="{{url('job-details')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
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

                                        <p> Service / Company Jobs</p>

                                        <p><span><strong><sup>$</sup>60 000</strong></span></p>

                                        <div class="text-button">
                                            <a href="{{url('job-details')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
