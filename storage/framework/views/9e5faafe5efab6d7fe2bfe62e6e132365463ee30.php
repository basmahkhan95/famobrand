<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="<?php echo e(route('admin.home')); ?>"> <img class="brand-logo"
                                                                                                    alt="stack admin logo"
                                                                                                    src="<?php echo e(asset('admin/images/logo.png')); ?>">
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
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="javascript:void(0)" data-toggle="dropdown"><i
                                class="fa fa-bell" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up"><?php echo e(Auth::user()->notifications()->whereIsRead(0)->count()); ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">Notifications</h6>
                            </li>
                            <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y"
                                data-ps-id="cbae8718-1b84-97ac-6bfa-47d792d8ad89">
                                <?php $__currentLoopData = Auth::user()->notifications()->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="notification-text font-small-3 text-muted famo-ellipsis"><?php echo e($notif->title); ?></p>
                                                <p class="notification-text font-small-3 text-muted"><?php echo e($notif->created_at); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item text-muted text-center" href="<?php echo e(route('admin.notification.index')); ?>">See More</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"
                           aria-expanded="false">
                            
                            <span class="user-name">Hi, <b><?php echo e(Auth::user()->name); ?></b></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-drp-down">
                            <!-- <h3>Account</h3> -->

                            <ul class="">
                                <li><a href="<?php echo e(route('admin.profile.index')); ?>">My Profile</a></li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-left" href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout<i
                                    class="fa fa-sign-in"></i></a>
                            <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo csrf_field(); ?>
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
<?php /**PATH /var/www/html/famo_brand/resources/views/admin/inc/nav.blade.php ENDPATH**/ ?>