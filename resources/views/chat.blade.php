@extends('layouts.app', ['Title' => 'Chat'])

@section('content')
    <section class="header-main inner-header">
        <div class="container-fluid header-container"><!--container-->
            <header class="header-inner">
                <div class="navigation">
                    <div class="menu-top">
                        <ul class="menu-top-ul">
                            <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a
                                    href="javascript:void(0)">Toll Free +1 456 996 8744</a></li>
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
                    <div class="row">
                        <div class="col-12">
                            <h1>Chat</h1>
                        </div>
                    </div>
                </div>
            </header>
        </div><!--container-->
        <div class="container">
            <div class="famo-chat-window"></div>
        </div>
    </section>
@endsection

@section('js')
    <script uid="user-{{ Auth::user()->id }}"
            src="https://dev28.onlinetestingserver.com/soachatcentralizedWeb/js/ocs.js"></script>
    <script type="text/javascript">
        $(function () {
            ocs.init({
                appid: '3e509ed778094424bebf8fc540f6e72a',
                appkey: '4ab363f7be5a528f68c36e7b75e2996f',
                domain: 'famobrand.com',
                global: '0',
                id: 'user-{{ Auth::user()->id }}',
                toid: 'admin-1',
                colorScheme: '0b2469',
                element: '.famo-chat-window',
                leftPanelBgColor: '#123456',
                leftPanelUsersColor: '#123456',
                chatWindowBgColor: '#123456',
                senderBubble: '#123456',
                recieverBubble: '#123456',
            })
        });
    </script>
@endsection

