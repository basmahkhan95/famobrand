@extends('layouts.app', ['Title' => 'Home'])

@section('content')

    <section class="header-main">
        <div class="container-fluid header-container">
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
                                <a href="{{ url('/') }}" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
                                   data-wow-delay="0.2s"><img src="{{ asset('user/images/logo.png') }}" alt="logo"
                                                              class="img-fluid"/></a>
                                <button type="button" data-toggle="collapse" data-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                                        class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                                <div id="navbarNav" class="collapse navbar-collapse">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.2s"><a href="{{ url('/home') }}"
                                                                     class="nav-link router-link-exact-active router-link-active">Home</a>
                                        </li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                            <a
                                                href="{{ url('logo-design') }}" class="nav-link">Logo Designs</a></li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                            <a
                                                href="{{ url('web-design-and-development') }}" class="nav-link">Web
                                                Design & Development</a></li>
                                        <!---->
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                            <a
                                                href="{{ url('app-design-and-development') }}" class="nav-link">App
                                                Design & Development</a></li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><a
                                                href="{{ url('about-us') }}" class="nav-link">About Us</a></li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                                            <a
                                                href="{{ url('pricing') }}" class="nav-link">Pricing</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="main-bannner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="main-ban-left">
                                <div class="owl-carousel owl-theme" id="ban-slider">
                                    <div class="item">
                                        <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Logos
                                            and Design,<br>Tailored to Perfection.</h1>
                                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.7s">Captivate
                                            your clients with a powerful logo, designed as per your vision.</p>
                                        <a href="{{ route('message') }}" class="wow fadeInUp" data-wow-duration="1.3s"
                                           data-wow-delay="1s">Get A Quote</a>
                                    </div>
                                    <div class="item">
                                        <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Fast and
                                            Smooth Applications.<br>Intuitive Interfaces.</h1>
                                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.7s">Getting
                                            frustrated on those laggy apps? We have a solution!</p>
                                        <a href="{{ route('message') }}" class="wow fadeInUp" data-wow-duration="1.3s"
                                           data-wow-delay="1s">Get A Quote</a>
                                    </div>
                                    <div class="item">
                                        <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                            Responsive Business Websites.</h1>
                                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.7s">Whether
                                            you require static or dynamic pages, we are here to help.</p>
                                        <a href="{{ route('message') }}" class="wow fadeInUp" data-wow-duration="1.3s"
                                           data-wow-delay="1s">Get A Quote</a>
                                    </div>
                                    <div class="item">
                                        <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Well, Our Creativity has no Boundaries.</h1>
                                        <a href="{{ route('message') }}" class="wow fadeInUp" data-wow-duration="1.3s"
                                           data-wow-delay="1s">Get A Quote</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="300ms">
                            <div class="main-ban-right">
                                <img src="{{ asset('user/images/main-ban-img.png') }}" alt="img" class="d-none d-md-block
">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-12">
                    <div class="check-domain">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Check Available
                            Domains</h2>
                        <div class="search-main wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="search-container">
                                <form action="{{ route('domain') }}">
                                    <input type="text" placeholder="Search here" name="keyword"
                                           value="{{ @$_GET['keyword'] }}" required>
                                    <a href="javascript:void(0)" class="nav-link"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prof-sec">
        <div class="container">
            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">We Create Business Solutions That Help
                You Grow.</h3>
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">A Professional Web Designing and
                Development Agency.</h2>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="prof-img wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.3s">
                        <img src="{{ asset('user/images/sec2-img.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="prof-text">
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">We are a design and
                            development agency specializing in the creation of logos, web and mobile apps. Our in-house
                            team of developers and designers provide exceptional creatives as per your requirements that
                            not only aligns with your goals but also blends with your existing theme. Our approach
                            includes a combination of traditional and modern methods to design creatives that appeals to
                            your audience and generates a positive impact.
                        </p>
                        <a href="{{ url('web-design-and-development') }}" class="wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="0.8s">Check Our Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Services</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Let our professionals help you create a positive impact and grow your reach through appealing designs and logo.</p>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                         data-wow-delay="0.3s">
                        <div class="service-img">
                            <img src="{{ asset('user/images/sec3-icon.png') }}" class="hvr-icon">
                        </div>
                        <div class="service-text">
                            <h3>Logo Design</h3>
                            <p>Get a custom logo for your business, easily adaptable to various digital and print media.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                         data-wow-delay="0.6s">
                        <div class="service-img">
                            <img src="{{ asset('user/images/sec3-icon2.png') }}" class="hvr-icon">
                        </div>
                        <div class="service-text">
                            <h3>Web Development</h3>
                            <p>Showcase your services and products through a robust and responsive website.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-3 col-12 d-flex">
                    <div class="service-boxes-main hvr-icon-bob wow zoomIn" data-wow-duration="1.2s"
                         data-wow-delay="0.9s">
                        <div class="service-img">
                            <img src="{{ asset('user/images/sec3-icon3.png') }}" class="hvr-icon">
                        </div>
                        <div class="service-text">
                            <h3>App Development</h3>
                            <p>Reach the growing market, with your custom Android or iOS application.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="packages pricing">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Packages</h2>

            <div class="tabs-sec">


                <ul class="nav nav-tabs">
                    @foreach(\App\PackageType::all() as $type)
                        <li><a data-toggle="pill" href="#type{{$type->id}}">{{$type->name}}</a></li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach(\App\PackageType::all() as $key => $type)
                        <div id="type{{$type->id}}" class="tab-pane fade {{ $key == 0 ? 'show active': '' }}">
                            <div class="row">
                                @foreach(\App\Package::wherePackageType($type->id)->get() as $package)

                                    <div class="col-lg-4 col-md-6 col-12 d-flex">
                                        <div class="pkg-box-main">
                                            <div class="pkg-box-inner">
                                                <div class="pkg-top">
                                                    <div class="media align-items-center justify-content-between">
                                                        <div class="media-body">
                                                            <h4>{{ $package->name }}</h4>
                                                            <h3>{{ $package->amount }}<span>/Month</span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pkg-bottom">
                                                    {!! $package->description !!}
                                                    @auth
                                                        <a href="javascript:void(0)" class="famo-btn-order-now"
                                                           data-package-id="{{ $package->id }}"
                                                           data-package-amount="{{ $package->amount }}"
                                                           data-package-name="{{ $package->name }}">Order Now</a>
                                                    @endauth
                                                    @guest
                                                        <a href="{{ route('login') }}">Order Now</a>
                                                    @endguest
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="packages">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Packages</h2>
            <div class="row">
                @foreach(\App\Package::all() as $package)
        <div class="col-lg-4 col-md-6 col-12 d-flex">
            <div class="pkg-box-main wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.3s">
                <div class="pkg-box-inner">
                    <div class="pkg-top">
                        <div class="media align-items-center justify-content-between">
                            <div class="media-body">
                                <h4>{{ $package->name }}</h4>
                                            <h3>{{ $package->amount }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="pkg-bottom">
                                    {!! $package->description !!}
        @auth
            <a href="javascript:void(0)" class="famo-btn-order-now" data-package-id="{{ $package->id }}" data-package-amount="{{ $package->amount }}" data-package-name="{{ $package->name }}">Order Now</a>
                                    @endauth
        @guest
            <a href="{{ route('login') }}">Order Now</a>
                                    @endguest
            </div>
        </div>
    </div>
</div>
@endforeach
        </div>
        <a href="{{ url('pricing') }}" class="hvr-icon-forward wow fadeInUp" data-wow-duration="1s"
               data-wow-delay="1.2s">View
                All Packages <i class="fa fa-long-arrow-right hvr-icon" aria-hidden="true"></i></a>
        </div>
    </section> -->

    @include('inc.testimonials')
    @include('inc.modal-payment')

@endsection
