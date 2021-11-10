<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="header-main inner-header">
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
                                        <li class="nav-item wow fadeInUp" data-wow-duration="1s"
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
                                <form action="<?php echo e(route('domain')); ?>">
                                    <input type="text" placeholder="Search here" name="keyword" value="<?php echo e(@$_GET['keyword']); ?>" required>
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

                    <?php if(isset($Result['APIResponse']['AvailabilityList'])): ?>
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
                                <?php $__currentLoopData = $Result['APIResponse']['AvailabilityList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item['Item']); ?></td>
                                        <td><?php echo e($item['Available'] ? 'Yes' : 'No'); ?></td>
                                        <td><?php echo e($item['Price']); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($Result['APIResponse']['Errors'])): ?>



                            <div class="alert alert-danger alert-block">No search record found</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['Title' => 'Search Domain'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/domain-search.blade.php ENDPATH**/ ?>