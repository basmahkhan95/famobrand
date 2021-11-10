@extends('layouts.app', ['Title' => 'Pricing'])

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
                                <h1 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">Pricing</h1>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </section>
        <section class="packages pricing">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Packages</h2>
                <p class="text-center mb-5">Get the best and quality creatives at the most competitive pricing.</p>

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
{{--        <section class="packages pricing">--}}
{{--            <div class="container">--}}
{{--                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Our Packages</h2>--}}
{{--                <div class="tabs-sec">--}}
{{--                    <div class="tab-content" id="myTabContent">--}}
{{--                        <div class="tab-pane fade show active" id="logo" role="tabpanel" aria-labelledby="logo-tab">--}}
{{--                            <div class="row">--}}
{{--                                @foreach(\App\Package::all() as $package)--}}
{{--                                    <div class="col-lg-4 col-md-6 col-12">--}}
{{--                                        <div class="pkg-box-main wow fadeInLeft" data-wow-duration="1s"--}}
{{--                                             data-wow-delay="0.9s">--}}
{{--                                            <div class="pkg-box-inner">--}}
{{--                                                <div class="pkg-top">--}}
{{--                                                    <div class="media align-items-center justify-content-between">--}}
{{--                                                        <div class="media-body">--}}
{{--                                                            <h4>{{ $package->name }}</h4>--}}
{{--                                                            <h3>{{ $package->amount }}<span>/Month</span></h3>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="pkg-bottom">--}}
{{--                                                    {!! $package->description !!}--}}
{{--                                                    @auth--}}
{{--                                                        <a href="javascript:void(0)" class="famo-btn-order-now"--}}
{{--                                                           data-package-id="{{ $package->id }}"--}}
{{--                                                           data-package-amount="{{ $package->amount }}"--}}
{{--                                                           data-package-name="{{ $package->name }}">Order Now</a>--}}
{{--                                                    @endauth--}}
{{--                                                    @guest--}}
{{--                                                        <a href="{{ route('login') }}">Order Now</a>--}}
{{--                                                    @endguest--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        @include('inc.testimonials')
        @include('inc.modal-payment')
    </div>
@endsection
