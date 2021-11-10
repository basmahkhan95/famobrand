<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(@$Title.' - '.config('app.name')); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('user/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('user/css/hover.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('user/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('user/css/responsive.css')); ?>">
</head>
<body>
<section class="login-header">
    <div class="container"><!--container-->
        <header class="header-inner">
            <div class="navigation">
                <div class="menu-top">
                    <ul class="menu-top-ul">
                        <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a href="#">Toll Free +1 456 996 8744</a></li>
                        <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s"><a href="<?php echo e(route('login')); ?>">Login</a></li>
                        <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><a href="<?php echo e(route('register')); ?>">Register</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="menu-bottom">
                    <div class="nav-right">
                        <nav id="menu" class="navbar navbar-expand-xl navbar-light p-0 w-100">
                            <a href="<?php echo e(url('/')); ?>" class="navbar-brand wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><img src="<?php echo e(asset('user/images/logo.png')); ?>" alt="logo"  class="img-fluid"/></a>
                            <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                            <div id="navbarNav" class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><a href="<?php echo e(url('/home')); ?>" class="nav-link">Home</a></li>
                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><a href="<?php echo e(url('/logo-design')); ?>" class="nav-link">Logo Designs</a></li>
                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="<?php echo e(url('/web-design-and-development')); ?>" class="nav-link">Web Design & Development</a></li>
                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="<?php echo e(url('/app-design-and-development')); ?>" class="nav-link">App Design & Development</a></li>
                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><a href="<?php echo e(url('/about-us')); ?>" class="nav-link">About Us</a></li>
                                    <li class="nav-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="<?php echo e(url('/pricing')); ?>" class="nav-link">Pricing</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <?php echo $__env->yieldContent('content'); ?>

    </div>

    <div class="modal-main">
        <div class="featured inner">
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lgg conf">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                            <div class="payment-modal-main">
                                <div class="payment-modal-inner">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>Password Recovery</h1>
                                        </div>
                                        <div class="col-12 form-group">
                                            <i class="fa fa-envelope" aria-hidden="true"></i><input type="text" class="form-control" spellcheck="true" placeholder="Enter Email Address">
                                        </div>
                                        <div class="col-12 form-group text-center">
                                            <button type="button" class="pink-btn" data-dismiss="modal" id="cont">Continue</button>
                                        </div>
                                        <div class="col-12 form-group register-main text-center">
                                            <a href="<?php echo e(route('login')); ?>" class="login back"><i class="fa fa-long-arrow-left"></i>back to login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <div class="modal-body">

                            <div class="payment-modal-main">
                                <div class="payment-modal-inner">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>Password Recovery</h1>
                                        </div>
                                        <div class="col-12 form-group">
                                            <i class="fa fa-pencil" aria-hidden="true"></i><input type="number" class="form-control" spellcheck="true" placeholder="Enter Verification Code">
                                        </div>
                                        <div class="col-12 form-group text-center">
                                            <button type="button" class="pink-btn" data-dismiss="modal" id="cont2">Continue</button>
                                        </div>
                                        <div class="col-12 form-group register-main text-center">
                                            <a href="<?php echo e(route('login')); ?>" class="login back"><i class="fa fa-long-arrow-left"></i>back to login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <div class="modal-body">

                            <div class="payment-modal-main">
                                <div class="payment-modal-inner">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>Password Recovery</h1>
                                        </div>
                                        <div class="col-12 form-group">
                                            <i class="fa fa-key" aria-hidden="true"></i><input type="password" class="form-control" spellcheck="true" placeholder="Enter Password"><a href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-12 form-group">
                                            <i class="fa fa-key" aria-hidden="true"></i><input type="password" class="form-control" spellcheck="true" placeholder="Retype Password"><a href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="col-12 form-group text-center">
                                            <button type="button" class="pink-btn" data-dismiss="modal">Update</button>
                                        </div>
                                        <div class="col-12 form-group register-main text-center">
                                            <a href="<?php echo e(route('login')); ?>" class="login back"><i class="fa fa-long-arrow-left"></i>back to login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div><!--container-->
    </div>
</section>


<footer class="login-footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('user/images/footer-logo.png')); ?>" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"></a>
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
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="<?php echo e(url('logo-design')); ?>">Logo Designing</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s"><a href="<?php echo e(url('web-design-and-development')); ?>">Web Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="<?php echo e(url('app-design-and-development')); ?>">App Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s"><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s"><a href="<?php echo e(url('pricing')); ?>">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Services</h6>
                    <ul>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="<?php echo e(url('logo-design')); ?>">Logo Designing</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="<?php echo e(url('web-design-and-development')); ?>">Website Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><a href="<?php echo e(url('app-design-and-development')); ?>">Application Designing & Development</a></li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="<?php echo e(url('printing-and-accessories')); ?>">Printing & Accessories</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer footer-1">
                        <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Contact Us</h6>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><a href="tel:+44 (0)203 5823 945">Phone: +44 (0)203 5823 945</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><a href="mailto:info@wim.com">Email: famobrand@info.com</a></li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#">Web: famobrands.com</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>, All Rights Reserved</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('user/js/owl.carousel.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>

<script>
    $('.famo-input-mask-phone-us').mask('(000) 000-0000');
    $('#cont').on('click', function(){
        $('#exampleModalCenter').modal('hide');
        $('#exampleModal').modal('show');
    });
    $('#cont2').on('click', function(){
        $('#exampleModal').modal('hide');
        $('#exampleModal2').modal('show');
    });
    $('#cont3').on('click', function(){
        $('#exampleModalCenter2').modal('hide');
        $('#exampleModal3').modal('show');
    });

</script>
</body>
</html>
<?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/layouts/login.blade.php ENDPATH**/ ?>