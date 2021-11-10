@extends('layouts.app', ['Title' => 'Search Domain'])

@section('js')
    <script type="text/javascript">

        function toTimestamp(strDate) {
            let datum = Date.parse(strDate);
            return datum / 1000;
        }

        $(document).ready(function () {
            $(".dataTables_filter input").attr("placeholder", "Search");

            var FilterIndex = 1;

            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    let min = $('#fromSelector').val() != '' ? toTimestamp($('#fromSelector').val()) : null;
                    let max = $('#toSelector').val() != '' ? toTimestamp($('#toSelector').val()) : null;
                    let startDate = moment(data[FilterIndex], 'MM/DD/YYYY').format('MM/DD/YYYY');
                    startDate = toTimestamp(startDate);
                    if (min == null && max == null) return true;
                    if (min == null && startDate <= max) return true;
                    if (max == null && startDate >= min) return true;
                    if (startDate <= max && startDate >= min) return true;
                    return false;
                }
            );

            $('#fromSelector').datepicker({
                uiLibrary: 'bootstrap4',
                onSelect: function () {
                    table.draw();
                },
                changeMonth: true,
                changeYear: true
            });

            $('#toSelector').datepicker({
                uiLibrary: 'bootstrap4',
                onSelect: function () {
                    table.draw();
                },
                changeMonth: true,
                changeYear: true
            });

            // Event listener to the two range filtering inputs to redraw on input
            $('#fromSelector, #toSelector').change(function () {
                FilterIndex = $('#fromSelector').attr('data-index')
                $('.zero-configuration').DataTable().draw();
            });

        });
    </script>
@endsection

@section('content')
    <section class="header-main inner-header">
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
                            <h1>Search Domain</h1>
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
                                    <input type="text" placeholder="Search here" name="keyword" value="{{ @$_GET['keyword'] }}" required>
                                    <a href="javascript:void(0)" class="nav-link"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--container-->
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @if(isset($Result['APIResponse']['AvailabilityList']))
                        <div class="row maain-tabble table-responsive">
                            <table class="table dataTable table-striped table-bordered zero-configuration">
                                <thead>
                                <tr>
                                    <th>Domain</th>
                                    <th>Availability</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Result['APIResponse']['AvailabilityList'] as $item)
                                    <tr>
                                        <td>{{ $item['Item'] }}</td>
                                        <td>{{ $item['Available'] ? 'Yes' : 'No' }}</td>
                                        <td>{{ $item['Price'] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    @if(isset($Result['APIResponse']['Errors']))
{{--                        @foreach($Result['APIResponse']['Errors'] as $error)--}}
{{--                            <div class="alert alert-danger alert-block">{{ $error['Message'] }}</div>--}}
{{--                        @endforeach--}}
                            <div class="alert alert-danger alert-block">No search record found</div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
