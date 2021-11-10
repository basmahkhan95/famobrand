<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{ route('admin.home') }}"><i class="fa fa-area-chart"
                                                                      aria-hidden="true"></i><span class="menu-title"
                                                                                                   data-i18n="">Dashboard</span></a>
            </li>
            <li class="nav-item {{ Request::segment(2) === 'user' ? 'active' : null }}"><a href="{{ route('admin.user.index') }}"><i class="fa fa-user" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">User Management</span></a></li>
            <li class="nav-item {{ Request::segment(2) === 'package' ? 'active' : null }}"><a href="{{ route('admin.package.index') }}"><i class="fa fa-file-text" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">Package management</span></a></li>
            <li class="nav-item {{ Request::segment(2) === 'subscription' ? 'active' : null }}"><a href="{{ route('admin.subscription.index') }}"><i class="fa fa-check-circle" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">Subscription Log</span></a></li>
            <li class="nav-item {{ Request::segment(2) === 'domain-search' ? 'active' : null }}"><a href="{{ route('admin.domain-search.index') }}"><i class="fa fa-globe" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">Domain Search log</span></a></li>
            <li class="nav-item {{ Request::segment(2) === 'feedback' ? 'active' : null }}"><a href="{{ route('admin.feedback.index') }}"><i class="fa fa-comment" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">Feedback Log</span></a></li>
{{--            <li class="nav-item"><a href="a-pages.html"><i class="fa fa-clipboard" aria-hidden="true"></i><span--}}
{{--                        class="menu-title" data-i18n="">Pages</span></a></li>--}}
            <li class="nav-item {{ Request::segment(2) === 'testimonial' ? 'active' : null }}"><a href="{{ route('admin.testimonial.index') }}"><i class="fa fa-star" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">Testimonials</span></a></li>
            <li class="nav-item {{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{ route('admin.chat') }}"><i class="fa fa-comment-o" aria-hidden="true"></i><span
                        class="menu-title" data-i18n="">Chat</span></a></li>
        </ul>
    </div>
</div>
