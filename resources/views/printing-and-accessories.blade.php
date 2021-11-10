@extends('layouts.app', ['Title' => 'Printing And Accessories'])

@section('content')
    <section class="header-main inner-header printing">
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
                                <a href="{{ url('/') }}" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
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
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="1s"><a href="{{ url('/about-us') }}" class="nav-link">About
                                                Us</a></li>
                                        <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
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
                            <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Printing & Accessories</h1>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="container">
            <div class="prof-sec">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="prof-text">
                            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Your Brand or Design on<br> T-Shirt, Bags & More</h2>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="prof-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{ asset('user/images/print-1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="print-sec2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12 pr-md-0">
                    <div class="sec2-left">
                        <img src="{{ asset('user/images/sec2-left.jpg') }}">
                    </div>
                </div>
                <div class="col-md-6 col-12 pl-md-0">
                    <div class="sec2-right">
                        <img src="{{ asset('user/images/sec2-right.jpg') }}">
                        <div class="text-box">
                            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                            <p>
                                it to make a type specimen book. It has survived not only five centuries.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="print-sec3">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Neque porro quisquam est qui dolorem </h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

        </div>
    </section>
    <section class="represent-brand printing">
        <div class="container-fluid">
            <div class="prof-sec">
                <div class="row align-items-center">

                    <div class="col-md-6 col-12 pl-md-0">
                        <div class="prof-img wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{ asset('user/images/print-4.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="prof-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h2>Represent Your Brand the<br>Way it Deserve to be.</h2>
                            <h3>T-Shirt Printing</h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                            <h3>Bag Printing</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                            <h3>Cap Printing</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('inc.testimonials')
@endsection
