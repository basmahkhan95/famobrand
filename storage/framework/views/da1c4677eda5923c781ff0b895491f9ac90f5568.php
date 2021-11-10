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
                                                    <h1><a href="<?php echo e(route('admin.package.index')); ?>" class="back"><i
                                                                class="fa fa-angle-left"></i></a>Package Management</h1>
                                                    <h1>View Package Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 form-group">
                                                        <label for="">Package Name</label>
                                                        <input type="text" class="form-control" disabled=""
                                                               value="<?php echo e($Package->name); ?>">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label for="">Type</label>
                                                        <input type="text" class="form-control" disabled=""
                                                               value="<?php echo e(@$Package->package_type()->first()->name); ?>">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label for="">Amount</label>
                                                        <input type="text" class="form-control" disabled=""
                                                               value="<?php echo e($Package->amount); ?>">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label for="">Description</label>
                                                        <?php echo $Package->description; ?>

                                                    </div>
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

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Package Details'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/package/show.blade.php ENDPATH**/ ?>