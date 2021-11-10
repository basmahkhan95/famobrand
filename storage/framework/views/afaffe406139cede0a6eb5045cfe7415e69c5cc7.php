<?php $__env->startSection('content'); ?>
    <div class="about-us">
        <section class="header-main  inner-header">
            <div class="container-fluid header-container"><!--container-->
                <header class="header-inner">
                    <div class="navigation">
                        <?php if(auth()->guard()->guest()): ?>
                            <div class="menu-top">
                                <ul class="menu-top-ul">
                                    <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a
                                            href="tel:+14569968744">Toll Free +1 456 996 8744</a></li>
                                    <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s"><a
                                            href="<?php echo e(route('login')); ?>">Login</a></li>
                                    <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><a
                                            href="<?php echo e(route('register')); ?>">Register</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if(auth()->guard()->check()): ?>
                            <div class="menu-top">
                                <ul class="menu-top-ul">
                                    <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a
                                            href="#">Toll Free +1 456 996 8744</a></li>
                                    <li class="avatar-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <img
                                            src="<?php echo e(Auth::user()->image); ?>"></li>
                                    <li class="profile-menu wow fadeInDown" data-wow-duration="1s"
                                        data-wow-delay="0.2s">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="dropdownMenuLink"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="<?php echo e(route('account')); ?>"><i
                                                        class="fa fa-user-circle" aria-hidden="true"></i>Account
                                                    Info</a>
                                                <a class="dropdown-item" href="<?php echo e(route('payment')); ?>"><i
                                                        class="fa fa-money"
                                                        aria-hidden="true"></i>Payment
                                                    Logs</a>
                                                <a class="dropdown-item" href="javascript:void(0)"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout&nbsp;<i
                                                        class="fa fa-sign-out" aria-hidden="true"></i></a>
                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                      style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="clearfix"></div>
                        <div class="menu-bottom">

                            <div class="nav-right">
                                <nav id="menu" class="navbar navbar-expand-xl navbar-light p-0 w-100">
                                    <a href="<?php echo e(url('/')); ?>" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
                                       data-wow-delay="0.2s"><img src="<?php echo e(asset('user/images/logo.png')); ?>" alt="logo"
                                                                  class="img-fluid"/></a>
                                    <button type="button" data-toggle="collapse" data-target="#navbarNav"
                                            aria-controls="navbarNav" aria-expanded="false"
                                            aria-label="Toggle navigation" class="navbar-toggler"><span
                                            class="navbar-toggler-icon"></span></button>
                                    <div id="navbarNav" class="collapse navbar-collapse">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.2s"><a href="<?php echo e(url('/home')); ?>"
                                                                         class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.4s"><a href="<?php echo e(url('/logo-design')); ?>"
                                                                         class="nav-link">Logo
                                                    Designs</a></li>
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.6s"><a href="<?php echo e(url('/web-design-and-development')); ?>"
                                                                         class="nav-link">Web
                                                    Design & Development</a></li>
                                            <!---->
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="0.8s"><a href="<?php echo e(url('/app-design-and-development')); ?>"
                                                                         class="nav-link">App
                                                    Design & Development</a></li>
                                            <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="1s"><a href="<?php echo e(url('/about-us')); ?>" class="nav-link">About
                                                    Us</a></li>
                                            <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                                data-wow-delay="1.2s"><a href="<?php echo e(url('/pricing')); ?>"
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
                    <?php $__currentLoopData = \App\PackageType::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a data-toggle="pill" href="#type<?php echo e($type->id); ?>"><?php echo e($type->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="tab-content">
                    <?php $__currentLoopData = \App\PackageType::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="type<?php echo e($type->id); ?>" class="tab-pane fade <?php echo e($key == 0 ? 'show active': ''); ?>">
                         <div class="row">
                        <?php $__currentLoopData = \App\Package::wherePackageType($type->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
                            <div class="col-lg-4 col-md-6 col-12 d-flex">
                                <div class="pkg-box-main">
                                    <div class="pkg-box-inner">
                                        <div class="pkg-top">
                                            <div class="media align-items-center justify-content-between">
                                                <div class="media-body">
                                                    <h4><?php echo e($package->name); ?></h4>
                                                    <h3><?php echo e($package->amount); ?><span>/Month</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pkg-bottom">
                                            <?php echo $package->description; ?>

                                            <?php if(auth()->guard()->check()): ?>
                                                <a href="javascript:void(0)" class="famo-btn-order-now"
                                                   data-package-id="<?php echo e($package->id); ?>"
                                                   data-package-amount="<?php echo e($package->amount); ?>"
                                                   data-package-name="<?php echo e($package->name); ?>">Order Now</a>
                                            <?php endif; ?>
                                            <?php if(auth()->guard()->guest()): ?>
                                                <a href="<?php echo e(route('login')); ?>">Order Now</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
            </div>
        </section>










































        <?php echo $__env->make('inc.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('inc.modal-payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['Title' => 'Pricing'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/pricing.blade.php ENDPATH**/ ?>