<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{ route('admin.home') }}"> <img class="brand-logo"
                                                                                                    alt="stack admin logo"
                                                                                                    src="{{ asset('admin/images/logo.png') }}">
                    </a>
                </li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left"></ul>
                <ul class="nav navbar-nav float-right">
                    <div class="famo-div-notif">
                        @include('admin.__partials.notif',['authUser'=>Auth::user()])
                    </div>
                    <li class="nav-item">
                        <a class="nav-link nav-link-label" href="{{ route('admin.chat') }}">
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up famo-message-icon"></span>
                        </a>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"
                           aria-expanded="false">
                            {{--                            <span class="avatar avatar-online"><img src="images/student-pro-girl.png" alt="avatar"></span>--}}
                            <span class="user-name">Hi, <b>{{ Auth::user()->name }}</b></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-drp-down">
                            <!-- <h3>Account</h3> -->

                            <ul class="">
                                <li><a href="{{ route('admin.profile.index') }}">My Profile</a></li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-left" href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout<i
                                    class="fa fa-sign-in"></i></a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
