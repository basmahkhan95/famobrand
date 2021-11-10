<footer>
    <div class="container">
        <div class="news-letter wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-12">
                    <h4>Live Chat with Our Sales</h4>
                    <p>Our chat line is currently offline</p>
                    <a href="{{ route('chat') }}">Lets Start Chat</a>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/') }}"><img src="{{ asset('user/images/footer-logo.png') }}" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"></a>
                    <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Follow Us On</h4>
                    <ul class="social-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Quick Links</h6>
                    <ul>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="{{ url('/logo-design') }}">Logo Designing</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s"><a href="{{ url('/web-design-and-development') }}">Web Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="{{ url('/app-design-and-development') }}">App Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s"><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s"><a href="{{ url('/pricing') }}">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Services</h6>
                    <ul>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="{{ url('/logo-design') }}">Logo Designing</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="{{ url('/web-design-and-development') }}">Website Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><a href="{{ url('/app-design-and-development') }}">Application Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="{{ url('/printing-and-accessories') }}">Printing & Accessories</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer footer-1">
                        <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Contact Us</h6>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="tel:+44 (0)203 5823 945">Phone: +44 (0)203 5823 945</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="mailto:info@wim.com">Email: famobrand@info.com</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="{{ url('/') }}">Web: famobrands.com</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="https://goo.gl/maps/4T2V6iasRWnYKP32A">Address: 6 Hollowfield Walk, Northolt UB5 5SZ</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright {{ date('Y') }} {{ config('app.name') }}, All Rights Reserved</p>
        </div>
    </div>
</footer>
