@extends('layouts.app', ['Title' => 'Logo Design'])

@section('content')
    <section class="header-main logo-design">
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
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                                        class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                                <div id="navbarNav" class="collapse navbar-collapse">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.2s"><a href="{{ url('/home') }}" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.4s"><a href="{{ url('/logo-design') }}" class="nav-link">Logo
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
                                <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Logo<br>Designing
                                </h1>
                            </div>

                        </div>
                        <div class="col-lg-7 col-12 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="300ms">
                            <div class="inner-ban-right">
                                <img src="{{ asset('user/images/logo-ban.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="prof-sec">

                            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><span>Logos</span> for Every
                                Business.</h2>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">We create custom logos
                                for your brand and give a concept that best aligns with your theme. Our logo designers
                                turn your imagination into reality and work with you to create a design that blends with
                                your style. Whether it is a letterhead or mascot, we give the best creatives to help you
                                create a powerful brand identity.</p>

                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Quality <span>Graphic
                                    Designs</span><br>Coupled with Professionalism.</h2>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">For years, we have
                                helped businesses create an incredible impact through appealing logos that aspire
                                customers.
                                </p>
                                <h3>Customized Logo</h3>
                                <p>Receive initial logo concepts with the opportunity to make unlimited changes in terms of colours, fonts and exposure. Once finalized, you will receive your logo in a variety of file formats and sizes, ready for signage, websites, and slideshows.
                                </p>
                                <h3>Style Guide</h3>
                                <p>In addition to designing the logo, we also provide style guides, which outlines the use of your logo and how will it be featured in different situations. We also help you incorporate it into signage systems, business card and letterhead.</p>
                                <h3>Copyright Ownership</h3>
                                <p>Once we deliver logos, you automatically become the rightful owner of the design and property. Having ownership allows clients to freely use creative on their websites, advertisements, brochures and other media files.</p>
                                <h3>Rebranding Experts</h3>
                                <p>Not loving your existing logo, or it might be that industry trends have changed and you
                                need a new design for your business logo and image. At Famo Brands, we have professionals who can overhaul your logo, providing a new look and feel to your
                                identity.</p>


                        </div>
                    </div>
                </div>
            </div><!--container-->
        </div>
    </section>
    <section class="our-work prof-sec">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">A Glimpse of our work</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/work-1.jpg')}}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/work-2.jpg')}}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-3 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.9s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/work-3.jpg')}}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/work-4.jpg')}}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/work-5.jpg')}}" class="hvr-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-3 col-12 d-flex">
                    <div class="work-box wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.9s">
                        <div class="work-img">
                            <img src="{{ asset('user/images/work-6.jpg')}}" class="hvr-icon">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="services few-steps">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Different Brands, Different Concepts.</h2>

            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="step-box left-box">
                        <div class="step-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>Iconic logos</h3>
                            <p>Make your target audience wow with a simple yet amazing iconic logos. Brands are moving towards this type of logo because of the way it connects to customers. They are quick in making an impression and can quickly adapt to various styles and templates.</p>
                        </div>
                        <div class="step-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>2D Animated Logos</h3>
                            <p>2D animation logos are on the rise and are on the rise because of their compatibility with websites, mobile and web applications. They are satisfying and showcase your brand’s identity in a unique yet appealing way.</p>
                        </div>
                          <div class="step-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>3D Animation Logos</h3>
                            <p>Why not transform your brand’s identity with a compelling and captivating 3D animation? 3D logos are suitable for all types of digital mediums, and if your primary business includes the creation of imaginations, intros and outros, a 3D logo will be a perfect fit!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 align-self-center">
                    <div class="step-box center-box wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="{{ asset('user/images/few-steps-img.png') }}">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="step-box right-box">
                        <div class="step-details wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                             <h3>Typographic Logos</h3>
                            <p>Why not catch the attention of your customers by a bright and appealing creative? Typographic logos are a blend of different styles and shape that together form a compelling picture and give a refreshing look to your brand identity.</p>
                        </div>
                        <div class="step-details wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>Symbolic Logos</h3>
                            <p>Let us help you get the best symbolic design for your business. Our illustrators and a team of designers know how to come up with creatives that is not only captivating at first glance but is also easy to remember.</p>
                        </div>
                         <div class="step-details wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3>Illustrative Logos</h3>
                            <p>We understand that trends are changing and not everyone requires an iconic or typographic logo. For these reasons, we master all concepts and can make high-definition illustrative logos which is both comfortable and detailed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('inc.testimonials')
@endsection
