@extends('layouts.app', ['Title' => 'App Design And Development'])

@section('content')
    <section class="header-main logo-design app-design">
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
                                <a href="index.html" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
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
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.6s"><a href="{{ url('/web-design-and-development') }}" class="nav-link">Web
                                                Design & Development</a></li>
                                        <!---->
                                        <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.8s"><a href="{{ url('/app-design-and-development') }}" class="nav-link">App
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
                                <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">App
                                    Designing<br>& Development</h1>
                            </div>

                        </div>
                        <div class="col-lg-7 col-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="300ms">
                            <div class="inner-ban-right">
                                <img src="{{ asset('user/images/app-ban.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="prof-sec">
                            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">App <span>Design</span> and Development.</h2>

                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Design, Development &
                                a lot more</h3>

                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <img src="{{ asset('user/images/app-ban-2.png') }}" class="wow bounceIn"
                                         data-wow-duration="1.3s" data-wow-delay="0.4s">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">We allow businesses to transform their vision into working programs that cater to a board market. Our application developers can revolutionize any business and can design apps on numerous frameworks. We have developers that can add high-end features, security, and flexibility to your apps while providing a revolutionary experience to your audience.</p>
                                </div>
                            </div>

                            <div class="text-center px-5 mt-3">
                                <h2>Interactive and Engaging Applications Tailored to Your Needs.</h2>
                                <p class="text-center">We create applications that provide a unique user experience. Our developer guides you throughout the process and assists you in creating the app suitable for your business.</p>

                                <h3 style="text-transform: uppercase; margin: 0 0 10px;">Interactive</h3>
                                <p class="text-center">We create interactive and easy to navigate apps to provide the best user experience and positive feedback for your business.
                                </p>
                                <h3 style="text-transform: uppercase; margin: 0 0 10px;">Cross Platforms</h3>
                                <p class="text-center">Famo Brands works with various developers and can provide cross-platform applications that work in both desktop and mobile devices.</p>
                                <h3 style="text-transform: uppercase; margin: 0 0 10px;">No Boundaries!</h3>
                                <p class="text-center">There is no idea we can’t implement. Whether you require a simple or complex application, our app designers and developers can help you achieve just that.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--container-->
        </div>
    </section>
    <section class="services few-steps">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Mobile and Web Applications for Every Platform.</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Outshine your idea with an amazing and dedicated application</p>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="step-box left-box">
                        <div class="step-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>iOS Application Development</h3>
                            <p>We have developed a dedicated and functional application for iPhone and macOS. Our developers create stellar applications to provide a competitive advantage that help your business prosper.</p>
                                <h3>Android Development</h3>
                            <p>Our in-house team of developers can deliver custom android apps for your business. From cloning application to bringing your unique idea to life, we are here to make your experience with us worthwhile.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 align-self-center">
                    <div class="step-box center-box wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="{{ asset('user/images/and-ios.png')}}">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="step-box right-box">
                        <div class="step-details wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>React Native App</h3>
                            <p>We create applications employing various framework, including React Native. Apps built on React are suitable for both iOS and Android and comes with code optimization along with many other features.</p>
                            <h3>Custom Applications</h3>
                            <p>Our developers and designers can also create custom web and desktop application as per your requirements. If you need management software or an ERP with your logo, we are here to help.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-work prof-sec">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Recent Apps</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/app-1.png') }}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/app-2.png') }}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-3 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.9s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/app-3.png') }}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/app-4.png') }}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/app-5.png') }}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-3 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.9s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/app-6.png') }}" class="hvr-icon">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('inc.testimonials')
@endsection
