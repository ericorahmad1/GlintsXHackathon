@extends('layouts.Template')
@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{asset('img/banner-image-1-1920x300.jpg')}}')};">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING</h2>

                        <h4><i class="fa fa-user"></i>John Doe  &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/06/2020 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

<main>
        <section class="featured-places">
            <div class="container">
                <div class="form-group">
                    <img src="img/blog-image-fullscren-1-1920x700.jpg" class="img-responsive" alt="">
                </div>

                <br>

                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                
                <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst. Vel sequi odit similique repudiandae ipsum iste, quidem tenetur id impedit, eaque et, aliquam quod.</p>

                <br>
                
                <h4>Lorem ipsum dolor sit amet.</h4>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, id quia maxime quas, unde sunt quaerat non! Sapiente aperiam, voluptatum voluptas recusandae qui veniam numquam voluptate ipsa earum quia dicta? Non praesentium quod vel ratione rerum dolor animi eligendi nisi, dolores culpa atque, deserunt veritatis incidunt quibusdam cumque obcaecati sit.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas unde tenetur dolorem eos esse, voluptatum iste iure voluptas dolor quo sit beatae. Odio laudantium eligendi ipsa pariatur eveniet doloremque quis voluptas veritatis repellendus laborum aspernatur sapiente mollitia totam fugit quod saepe earum, iste voluptatibus, aut aperiam iure omnis! Id libero quibusdam nisi fugiat, optio necessitatibus vitae magni incidunt ea tenetur?</p>

                <br>
                <br>


                <h4>Leave a comment</h4>

                <div class="row">
                    <div class="col-md-8">
                        <form id="contact" action="" method="post">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                  <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                </fieldset>
                              </div>
                              <div class="col-lg-12">
                                <fieldset>
                                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                              </div>
                              <div class="col-lg-12">
                                <div class="blue-button">
                                    <a href="#">Submit</a>
                                </div>
                              </div>
                            </div>
                          </form>
                    </div>

                    <div class="col-md-4">
                      <div class="left-content">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>

                        <br> 

                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
