@extends('layouts.app', ['Title' => 'Web Design And Development'])
@section('content')
<section class="header-main logo-design web-design">
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
                                        <li class="avatar-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><img
                                            src="{{ Auth::user()->image }}"></li>
                                            <li class="profile-menu wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{ route('account') }}"><i
                                                        class="fa fa-user-circle" aria-hidden="true"></i>Account Info</a>
                                                        <a class="dropdown-item" href="{{ route('payment') }}"><i class="fa fa-money"
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
                                            <a href="{{ url('/') }}" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
                                            data-wow-delay="0.2s"><img src="{{ asset('user/images/logo.png') }}" alt="logo"
                                            class="img-fluid"/></a>
                                            <button type="button" data-toggle="collapse" data-target="#navbarNav"
                                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                                            class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                                            <div id="navbarNav" class="collapse navbar-collapse">
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                    data-wow-delay="0.2s"><a href="{{ url('/home') }}" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.4s"><a href="{{ url('/logo-design') }}" class="nav-link">Logo
                                                Designs</a></li>
                                                <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.6s"><a href="{{ url('/web-design-and-development') }}"
                                                class="nav-link">Web
                                            Design & Development</a></li>
                                            <!---->
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.8s"><a href="{{ url('/app-design-and-development') }}"
                                            class="nav-link">App
                                        Design & Development</a></li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
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
                        <div class="col-lg-5 col-12">
                            <div class="main-ban-left">
                                <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Web
                                    Designing<br>& Development</h1>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="300ms">
                                <div class="inner-ban-right">
                                    <img src="{{ asset('user/images/web-ban.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="prof-sec">
                                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Create websites that drive traffic.</h3>
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Generate leads using CMS’s like WordPress, Drupal, Shopify, and more!</h2>
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="prof-img wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                            <img src="{{ asset('user/images/sec2-img.png') }}" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="prof-text">
                                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Modern web designs are more involved than creating a simple page with tons of information. Today, you need a responsive website, with fast loading time that also provides a user-friendly navigation.</p>
                                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">The
                                                standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                            those interested. Sections</p>
                                        </div>
                                    </div>
                                </div>
                            
                              <div class="text-center px-5 mt-3">
                                <h2>How We <span>Stand</span> Out?</h2>
                                <p class="text-center">Whether you need of a landing page to get your business online, or a fully functional e-commerce store, our developers are here to bring your vision to life.
                                </p>
                                <h3>Industry Expertise</h3>
                                <p class="text-center">We have years of experience in creating, managing and overhauling different types of websites and can work with multiple CMS.
                                </p>
                                <h3>Technical</h3>
                                <p class="text-center">Our team understands how important is the structure of your website, which is why we put extra efforts into optimizing speed and page load time.</p>
                                <h3>Customer Experience</h3>
                                <p class="text-center">We are very mindful of everything we do and do the utmost to provide a positive customer experience through our quality work.</p>
                                <h3>Redesigns</h3>
                                <p class="text-center">Our professionals are here to help you with every type of changes and overhauling for your website and always cater to your customized requirement.</p>
                            </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!--container-->
            </div>
        </section>
        <section class="our-work prof-sec">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Portfolio</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                            <div class="work-img">
                                <img src="{{ asset('user/images/web-1.png') }}" class="hvr-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                            <div class="work-img">
                                <img src="{{ asset('user/images/web-2.png') }}" class="hvr-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.9s">
                            <div class="work-img">
                                <img src="{{ asset('user/images/web-3.png') }}" class="hvr-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                            <div class="work-img">
                                <img src="{{ asset('user/images/web-4.png') }}" class="hvr-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                            <div class="work-img">
                                <img src="{{ asset('user/images/web-5.png') }}" class="hvr-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12 d-flex">
                        <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.9s">
                            <div class="work-img">
                                <img src="{{ asset('user/images/web-6.png') }}" class="hvr-icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services few-steps">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Websites For Everyone</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">There are many variations of passages
                    of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
                randomised words which don't look even slightly believable.</p>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="step-box left-box">
                            <div class="step-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h3>Responsive</h3>
                                <p>Responsive websites don’t only rank better in Search Engines but also help you reach a broader market. As per the latest studies, more than 60% of searches are now done via mobile and not having a responsive website can severely impact your business performance.</p>
                            </div>
                            <div class="step-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h3>WordPress</h3>
                                <p>We help you create mobile-friendly WordPress websites from scratch and also goes above and beyond to customize it as per your preferences. Our team help you in the selection of theme, installation of plugins and optimization of code. Whether you need to create a business website or a WooCommerce store, we are here to help.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 align-self-center">
                        <div class="step-box center-box wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{ asset('user/images/few-steps-img.png')}}">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="step-box right-box">
                            <div class="step-details wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h3>Shopify</h3>
                                <p>Let us help in creating a complete drop-shipping or online store from scratch. Our experienced professionals know how to help you create a full-fledged and responsive store that generate sales to multiply your yearly revenues.</p>
                            </div>
                            <div class="step-details wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h3>Landing pages</h3>
                                <p>Landing pages are sturdy and can generate higher leads than blogposts. They are crucial in marketing different type of products and leaves a lasting impression on the website visitor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('inc.testimonials')
        @endsection