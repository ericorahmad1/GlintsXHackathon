@extends('layouts.Template')
@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('img/banner-image-1-1920x300.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Security officer - luxury retail</h2>
                        <h4><i class="fa fa-briefcase"></i> Security / Protective services jobs</h4>
                    </div>
                </div>
            </div>
        </div>
</section>

<main>
    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                <div>
                    <img src="{{url('img/product-1-720x480.jpg')}}" alt="" class="img-responsive wc-image">
                </div>
                <br>
                </div>

                <div class="col-lg-9 col-md-9 col-xs-12">
                <h2><strong class="text-primary">$60 000</strong></h2>

                <p class="lead">
                    <i class="fa fa-map-marker"></i> London &nbsp;&nbsp;
                    <i class="fa fa-calendar"></i> 20-06-2020 &nbsp;&nbsp;
                    <i class="fa fa-file"></i> Contract
                </p>

                <div class="blue-button">
                        <a href="#">Apply for this job</a>
                    </div>
                </div>
            </div>

            <div class="accordions">
                <ul class="accordion">
                    <li>
                        <a class="accordion-trigger">Job Description</a>
                        
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, delectus totam non est excepturi expedita, illum vitae vel dolore exercitationem nobis quasi dicta illo id  quas. Error commodi, modi minus. <br><br>
                                Perferendis, quidem, facilis. Aspernatur alias numquam saepe deleniti dolorem quos repudiandae eaque ad eligendi quam, ratione, error minima culpa suscipit nostrum magni omnis est. Suscipit dolor sint aut maiores eius, id nemo, optio, quos tempora cum est quas. At recusandae obcaecati consequatur ipsa dignissimos, eius commodi qui quae exercitationem fugiat, voluptatem, nesciunt!
                            </p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem vero culpa rerum similique labore, nisi minus voluptatum numquam fugiat. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugit sint reiciendis quas temporibus quam maxime nulla vitae consectetur perferendis, fugiat assumenda ex dicta molestias soluta est quo totam cum?</p>
                        </div>
                    </li>
                    <li>
                        <a class="accordion-trigger">About Cannon Guards Security ltd</a>
                        <div class="accordion-content">
                            <p class="lead"> <i class="fa fa-map-marker"></i> London </p>

                            <p>Looking to improve the security at your place of business? If so, we will provide you with the trained security officers and professionally licensed personnel needed for any business. From a security guard for construction site security to private event security, you can be sure to get the very best from our staff. Alternatively we provide tailor-made security guard training for your existing security staff.</p>

                            <br>

                            <p>Looking to improve the security at your place of business? If so, we will provide you with the trained security officers and professionally licensed personnel needed for any business. From a security guard for construction site security to private event security, you can be sure to get the very best from our staff. Alternatively we provide tailor-made security guard training for your existing security staff.</p>
                        </div>
                    </li>
                    <li>
                        <a class="accordion-trigger">Contact Details</a>

                        <div class="accordion-content">
                            <p>
                                <span>Name</span>

                                <br>

                                <strong>John Smith</strong>

                            </p>

                            <p>
                                <span>Phone</span>

                                <br>
                                
                                <strong>
                                <a href="tel:123-456-789">123-456-789</a>
                                </strong>
                            </p>

                            <p>
                                <span>Mobile phone</span>

                                <br>
                                
                                <strong>
                                <a href="tel:456789123">456789123</a>
                                </strong>
                            </p>

                            <p>
                            <span>Email</span>

                            <br>
                            
                            <strong>
                                <a href="mailto:john@carsales.com">john@carsales.com</a>
                            </strong>
                            </p>

                            <p>
                            <span>Website</span>

                            <br>
                            
                            <strong>
                                <a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a>
                            </strong>
                            </p>
                        </div>
                    </li>
                </ul> <!-- / accordion -->
            </div>
        </div>
    </section>
</main>
@endsection
