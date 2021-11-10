<section class="testimonials why-choose">
    <div class="container">
        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Why Choose Famo Brands</h2>
        <div class="row d-flex align-items-center">
            <div class="col-md-6 col-12">
                <ul class="p-0">
                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Quick Turnaround Time</li>
                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">In-House Teams, We Never Outsource</li>
                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">High-quality Deliverables</li>
                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">Flexibility to Make Adjustment in Designs</li>
                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">Dedicated Support to Help You at Each Step</li>
                </ul>
            </div>
            <div class="col-md-6 col-12">
                <img src="{{ asset('user/images/why-choose.png') }}" class="wow zoomIn" data-wow-duration="1s"
                     data-wow-delay="0.4s">
            </div>
        </div>
    </div>
    <div class="container-fluid overflow-hidden">
        <div class="testi-slider-main">
            <div class="row">
                <div class="col-xl-3 offset-xl-1 col-lg-3 offset-lg-1 col-md-6">
                    <div class="content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2>Testimonials</h2>
                        <p>What Clients Are Saying.</p>
                        <div id="test">
                            <div class="mmprev btn-prev"></div>
                            <div class="mmnext btn-next"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 d-flex align-items-center">
                    <div class="testi-slider wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="owl-carousel owl-theme" id="testi">
                            @foreach(\App\Testimonial::all() as $key)
                                <div class="item">
                                    <div class="box">
                                        <div class="media align-items-center">
                                            {{--                                            <img src="{{ asset('user/images/testi-img.png') }}" class="img-fluid" alt="">--}}
                                            <div class="media-body right-content">
                                                <h5>{{ $key->client_name }}</h5>
                                                <h6>Member</h6>
                                            </div>
                                        </div>
                                        <p>{{ $key->testimonial }}</p>
                                        <img src="{{ asset('user/images/testi-coma.png') }}" alt="img">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
