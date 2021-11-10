<?php $__env->startSection('content'); ?>
    <div class="app-content content view user all-notifications">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-12">
                            <div class="add-user">
                                <div class="card rounded pad-20">
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h1 class="pull-left">Notifications</h1>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php $__currentLoopData = $Notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="noti-inner-cards mb-3">
                                                            <div class="card mt-3">
                                                                <div class="notification-title">
                                                                    <h5><?php echo e($notif->title); ?></h5>
                                                                    <a href="<?php echo e($notif->url); ?>">View</a>
                                                                </div>
                                                                <div class="noti-content">
                                                                    <div class="media align-items-center">
                                                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                                        <div class="media-body">
                                                                            <p><?php echo e($notif->description); ?></p>
                                                                        </div>
                                                                        <h5><?php echo e($notif->created_at); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Notifications'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/notification/index.blade.php ENDPATH**/ ?>