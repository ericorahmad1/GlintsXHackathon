@extends('layouts.Template')
@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('img/banner-image-1-1920x300.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


<main>
    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-xs-12">
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

                        <div class="col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <div class="thumb-img">
                                        <img src="{{url('img/blog-4-720x480.jpg')}}" alt="">
                                    </div>

                                    <div class="overlay-content">
                                        <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                    </div>
                                </div>

                                <div class="down-content">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>

                                    <div class="text-button">
                                        <a href="{{url('blog-details')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <div class="thumb-img">
                                        <img src="{{url('img/blog-5-720x480.jpg')}}" alt="">
                                    </div>

                                    <div class="overlay-content">
                                        <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                    </div>
                                </div>

                                <div class="down-content">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>

                                    <div class="text-button">
                                        <a href="{{url('blog-details')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <div class="thumb-img">
                                        <img src="{{url('img/blog-6-720x480.jpg')}}" alt="">
                                    </div>

                                    <div class="overlay-content">
                                        <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                    </div>
                                </div>

                                <div class="down-content">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>

                                    <div class="text-button">
                                        <a href="{{url('blog-details')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-12">
                    <div class="form-group">
                        <h4>Blog Search</h4>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

                            <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <h4>Lorem ipsum dolor sit amet</h4>
                    </div>

                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quae animi sint.</a></p>
                    <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut hic possimus, nesciunt mag!</a></p>
                    <p><a href="#">Vatae expedita deleniti optio ex adipisci animi, iusto tempora. </a></p>
                    <p><a href="#">Soluta non modi dolorem voluptates. Maiores est, molestiae dolor laborum.</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection