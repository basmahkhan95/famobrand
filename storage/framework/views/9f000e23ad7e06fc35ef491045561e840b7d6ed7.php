<?php $__env->startSection('content'); ?>
    <section class="header-main inner-header">
        <div class="container-fluid header-container"><!--container-->
            <header class="header-inner">
                <div class="navigation">
                    <div class="menu-top">
                        <ul class="menu-top-ul">
                            <li class="toll-free wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a
                                    href="javascript:void(0)">Toll Free +1 456 996 8744</a></li>
                            <li class="avatar-img wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><img
                                    src="<?php echo e(Auth::user()->image); ?>"></li>
                            <li class="profile-menu wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                         aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo e(route('account')); ?>"><i
                                                class="fa fa-user-circle" aria-hidden="true"></i>Account Info</a>
                                        <a class="dropdown-item" href="<?php echo e(route('payment')); ?>"><i class="fa fa-money"
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
                    <div class="clearfix"></div>
                    <div class="menu-bottom">
                        <div class="nav-right">
                            <nav id="menu" class="navbar navbar-expand-xl navbar-light p-0 w-100">
                                <a href="<?php echo e(url('/')); ?>" class="navbar-brand wow fadeInDown" data-wow-duration="1s"
                                   data-wow-delay="0.2s"><img src="<?php echo e(asset('user/images/logo.png')); ?>" alt="logo"
                                                              class="img-fluid"/></a>
                                <button type="button" data-toggle="collapse" data-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                                        class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                                <div id="navbarNav" class="collapse navbar-collapse">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.2s"><a href="<?php echo e(url('/home')); ?>" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.4s"><a href="<?php echo e(url('/logo-design')); ?>" class="nav-link">Logo
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
                                        <li class="nav-item active wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="1s"><a href="<?php echo e(url('/about-us')); ?>" class="nav-link">About
                                                Us</a></li>
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="1.2s"><a href="<?php echo e(url('/pricing')); ?>"
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
                            <h1>Account Info</h1>
                        </div>
                    </div>
                </div>
            </header>
        </div><!--container-->
        <div class="container">
            <?php echo $__env->make('inc.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row u-profile">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">


                    <div class="row">
                        <div class="col-12">
                            <div class="media justify-content-between align-items-center">
                                <div class="profile-box">
                                    <div class="profile-img">
                                        <img src="<?php echo e(Auth::user()->image); ?>">
                                    </div>
                                    <div class="profile-text">
                                        <h2><?php echo e(Auth::user()->name); ?></h2>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('account.edit')); ?>">Edit Profile</a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#famo-modal-change-password">Change Password</a>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-3">
                        <div class="col-12">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label>Name:</label>
                                        <input type="text" value="<?php echo e(Auth::user()->name); ?>" class="form-control"
                                               disabled="">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>"
                                               disabled="">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Phone No:</label>
                                        <input type="text" value="<?php echo e(Auth::user()->phone_no); ?>" class="form-control"
                                               disabled="">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('inc.modal-change-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['Title' => 'Account Info'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/account.blade.php ENDPATH**/ ?>