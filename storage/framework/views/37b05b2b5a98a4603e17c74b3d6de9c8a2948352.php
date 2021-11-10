<?php $__env->startSection('content'); ?>
    <div class="app-content content view user profile">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <?php echo $__env->make('admin.inc.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1 class="pull-left"><a href="<?php echo e(route('admin.user.index')); ?>"
                                                                             class="back"><i
                                                                class="fa fa-angle-left"></i></a>User Profile</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <label for="">User ID</label>
                                                            <input type="text" value="<?php echo e('#'.$User->id); ?>"
                                                                   class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Name</label>
                                                            <input type="text" name="" value="<?php echo e($User->name); ?>"
                                                                   class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" name="" value="<?php echo e($User->email); ?>" id=""
                                                                   class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Phone</label>
                                                            <input type="text" value="<?php echo e($User->phone_no); ?>"
                                                                   class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Registered On</label>
                                                            <input type="text" value="<?php echo e($User->created_at); ?>"
                                                                   class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <a href="<?php echo e(route('admin.user.edit', ['id' => $User->id])); ?>">Edit
                                                                Profile</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'User Profile'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/user/show.blade.php ENDPATH**/ ?>