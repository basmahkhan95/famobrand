<li class="dropdown dropdown-notification nav-item">
    <a class="nav-link nav-link-label famo-bell-icon" href="javascript:void(0)"
       data-toggle="dropdown"><i
            class="fa fa-bell" aria-hidden="true"></i>
        <?php if($authUser->notifications()->whereIsRead(0)->count()): ?>
            <span
                class="badge badge-pill badge-default badge-danger badge-default badge-up famo-notif-count"><?php echo e($authUser->notifications()->whereIsRead(0)->count()); ?></span>
        <?php endif; ?>
    </a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
        <li class="dropdown-menu-header">
            <h6 class="dropdown-header m-0">Notifications</h6>
        </li>
        <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y"
            data-ps-id="cbae8718-1b84-97ac-6bfa-47d792d8ad89">
            <?php $__currentLoopData = $authUser->notifications()->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <a class="dropdown-item text-muted text-center"
               href="<?php echo e(route('admin.notification.index')); ?>">See More</a>
        </li>
    </ul>
</li>
<?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/__partials/notif.blade.php ENDPATH**/ ?>