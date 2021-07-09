<div class="wrap navbar-fixed-top">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <button id="primary-nav-button" type="button">Menu</button>
                    <a href="{{url('/home/index')}}"><div class="logo">
                        <img src="{{url('img/logo-ngantor.png')}}" alt="Venue Logo" width="10%">
                    </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class='active'><a href="{{url('/home/index')}}">Home</a></li>

                            <li><a href="{{url('/home/jobs')}}">Jobs</a></li>

                            <li>
                                <a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/home/about-us')}}">About Us</a></li>
                                    <li><a href="{{url('/home/team')}}">Team</a></li>
                                    <li><a href="{{url('/home/blog')}}">Blog</a></li>
                                    <li><a href="{{url('/home/testimonials')}}">Testimonials</a></li>
                                    <li><a href="{{url('/home/terms')}}">Terms</a></li>
                                </ul>
                            </li>

                            <li><a href="{{url('home/contact')}}">Contact Us</a></li>
                            <li><a href="{{url('login')}}" class="text-color-blue">Login/Sign Up</a></li>
                            <li><a href="#"></a></li>

                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </div>
    </header>
</div>