@extends('layouts.app', ['Title' => 'About Us'])

@section('content')
    <div class="about-us">
        <section class="header-main  inner-header">
            <div class="container-fluid header-container"><!--container-->
                <header class="header-inner">
                    <div class="navigation">
                        @guest
                            <div class="menu-top">
                                <ul class="menu-top-ul">
                                    <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a
                                            href="tel:+14569968744">Toll Free +1 456 996 8744</a></li>
                                    <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s"><a
                                            href="{{ route('login') }}">Login</a></li>
                                    <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><a
                                            href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>
                        @endguest

                        @auth
                            <div class="menu-top">
                                <ul class="menu-top-ul">
                                    <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a
                                            href="#">Toll Free +1 456 996 8744</a></li>
                                    <li class="avatar-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <img
                                            src="{{ Auth::user()->image }}"></li>
                                    <li class="profile-menu wow fadeInDown" data-wow-duration="1s"
                                        data-wow-delay="0.2s">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="dropdownMenuLink"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ route('account') }}"><i
                                                        class="fa fa-user-circle" aria-hidden="true"></i>Account
                                                    Info</a>
                                                <a class="dropdown-item" href="{{ route('payment') }}"><i
                                                        class="fa fa-money"
                                                        aria-hidden="true"></i>Payment
                                                    Logs</a>
                                                <a class="dropdown-item" href="javascript:void(0)"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout&nbsp;<i
                                                        class="fa fa-sign-out" aria-hidden="true"></i></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                        <div class="clearfix"></div>
                        <div class="menu-bottom">

                            <div class="nav-right">
                                <nav id="menu" class="navbar navbar-expand-xl navbar-light p-0 w-100">
                                    <a href="index.html" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
                                       data-wow-delay="0.2s"><img src="{{ asset('user/images/logo.png') }}" alt="logo"
                                                                  class="img-fluid"/></a>
                                    <button type="button" data-toggle="collapse" data-target="#navbarNav"
                                            aria-controls="navbarNav" aria-expanded="false"
                                            aria-label="Toggle navigation" class="navbar-toggler"><span
                                            class="navbar-toggler-icon"></span></button>
                                    <div id="navbarNav" class="collapse navbar-collapse">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.2s"><a href="{{ url('/home') }}"
                                                                         class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.4s"><a href="{{ url('/logo-design') }}"
                                                                         class="nav-link">Logo
                                                    Designs</a></li>
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.6s"><a href="{{ url('/web-design-and-development') }}"
                                                                         class="nav-link">Web
                                                    Design & Development</a></li>
                                            <!---->
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.8s"><a href="{{ url('/app-design-and-development') }}"
                                                                         class="nav-link">App
                                                    Design & Development</a></li>
                                            <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="1s"><a href="{{ url('/about-us') }}" class="nav-link">About
                                                    Us</a></li>
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="1.2s"><a href="{{ url('/pricing') }}"
                                                                         class="nav-link">Pricing</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="main-bannner-content">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">About Us</h1>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="prof-sec">

                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><span>Contact Us</span></h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Famo Brands is a
                                    design and development company providing various solutions to businesses. Our
                                    services include everything you need to build a website, logos, illustration,
                                    graphics, and more. We have our primary office in Northolt, UK, from where we serve
                                    our customers. Famo Brands works with professionals that assist businesses in
                                    building their reputation and image through the implementation of various marketing,
                                    branding, and communication channels. From simple logo design to complete marketing
                                    on digital and print media, our creative team makes sure to deliver content that
                                    adds value to your business.
                                </p>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><b>Our team has
                                        worked across several industries, including real-estate and hospitality,
                                        bringing you the best concept required for your brand.
                                    </b></p>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">As a leading name
                                    in providing ultimate business solutions tailored to your needs, we
                                    leave no stone unturned to help bring your ideas to life. We have been incorporating
                                    cutting edge technology to assist you with digital transformation and provide
                                    creatives that blend a combination of styles and artwork.</p>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">We do our best to
                                    understand your challenge and deliver solutions that best fir your
                                    requirements. Through hands-on experience in logo creation, app development, and
                                    designing, we make it easier for you to focus on an integral part of your business.
                                    Our broad experience makes us stand out in the industry and provide a positive
                                    experience to our clients. Whether you require a mascot or a combination mark logo,
                                    our designers are here to assist.</p>
                            </div>
                        </div>
                    </div>
                    <div class="stats">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 d-flex">
                                <div class="stats-box wow zoomIn hvr-icon-spin" data-wow-duration="1s"
                                     data-wow-delay="0.3s">
                                    <h3>4.5</h3>
                                    <p>Shopper Approved Site Jabber<br>Merchant Circle Judysbook</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 d-flex">
                                <div class="stats-box center-box wow zoomIn hvr-icon-spin" data-wow-duration="1s"
                                     data-wow-delay="0.6s">
                                    <h3>561+</h3>
                                    <p>Brand Identities<br>created over a span of 6 years</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-3 col-12 d-flex">
                                <div class="stats-box wow zoomIn hvr-icon-spin" data-wow-duration="1s"
                                     data-wow-delay="0.9s">
                                    <h3>516+</h3>
                                    <p>Successful projects and <br> Satisfied customers worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--container-->
            </div>
        </section>
        <section class="services what-we-do">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">What we Do</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                             data-wow-delay="0.3s">
                            <div class="service-img">
                                <img src="{{ asset('user/images/what-1.png') }}" class="hvr-icon">
                            </div>
                            <div class="service-text">
                                <h3>Logo Design</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                             data-wow-delay="0.6s">
                            <div class="service-img">
                                <img src="{{ asset('user/images/what-2.png')}}" class="hvr-icon">
                            </div>
                            <div class="service-text">
                                <h3>Web Design</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                             data-wow-delay="0.9s">
                            <div class="service-img">
                                <img src="{{ asset('user/images/what-3.png')}}" class="hvr-icon">
                            </div>
                            <div class="service-text">
                                <h3>App Design</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                             data-wow-delay="0.3s">
                            <div class="service-img">
                                <img src="{{ asset('user/images/what-4.png')}}" class="hvr-icon">
                            </div>
                            <div class="service-text">
                                <h3>Domain Hosting</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                             data-wow-delay="0.6s">
                            <div class="service-img">
                                <img src="{{ asset('user/images/what-5.png')}}" class="hvr-icon">
                            </div>
                            <div class="service-text">
                                <h3>Web Development</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                             data-wow-delay="0.9s">
                            <div class="service-img">
                                <img src="{{ asset('user/images/what-6.png')}}" class="hvr-icon">
                            </div>
                            <div class="service-text">
                                <h3>App Development</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <section class="testimonials why-choose pb-0">
            <div class="container">
                <h2 class="wow fadeInUp mb-3" data-wow-duration="1s" data-wow-delay="0.3s">Contact Us</h2>
                <p class="wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.6s">Our professionals are here to assist with every you need.<br>Drop us a message with your query or feedback, and we will get in touch with you shortly.</p>
                <div class="footer-top p-0">
                    <div class="row">
                        
                <div class="col-12">
                    <div class="footer footer-1">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="tel:+44 (0)203 5823 945">Phone: +44 (0)203 5823 945</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="mailto:info@wim.com">Email: famobrand@info.com</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="{{ url('/') }}">Web: famobrands.com</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="https://goo.gl/maps/4T2V6iasRWnYKP32A">Address: 6 Hollowfield Walk, Northolt UB5 5SZ</a></li>
                            
                        </ul>
                    </div>
                </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
        @include('inc.testimonials')
    </div>
@endsection
