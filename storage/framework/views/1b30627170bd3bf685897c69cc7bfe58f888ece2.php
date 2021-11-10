<?php $__env->startSection('content'); ?>
    <div class="app-content content view user profile edit-pkg">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1><a href="<?php echo e(route('admin.profile.index')); ?>" class="back"><i class="fa fa-angle-left"></i></a>Personal Info</h1>
                                                </div>
                                                <div class="right">
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#famo-modal-change-password">Change Password</a>
                                                </div>
                                            </div>









                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Information</h3>
                                            </div>
                                            <div class="col-12">
                                                <form action="<?php echo e(route('admin.profile.update')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-3 col-sm-3 col-12">
                                                            <label for="">Name</label>
                                                        </div>
                                                        <div class="col-xl-8 col-sm-9 col-12">
                                                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-3 col-sm-3 col-12">
                                                            <label for="">Email</label>
                                                        </div>
                                                        <div class="col-xl-8 col-sm-9 col-12">
                                                            <input type="email" placeholder="Enter Your Email" class="form-control" disabled="" value="<?php echo e(Auth::user()->email); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-sm-6 col-12">
                                                            <input type="submit" class="btn btn-primary" value="Save">
                                                        </div>
                                                    </div>
                                                </form>
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
    <?php echo $__env->make('admin.inc.modal-change-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Edit Profile'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/profile/edit.blade.php ENDPATH**/ ?>