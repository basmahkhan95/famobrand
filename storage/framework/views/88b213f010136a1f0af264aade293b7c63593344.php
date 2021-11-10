<?php $__env->startSection('content'); ?>
    <div class="app-content content view user testi">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
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
                                                    <h1>Testimonials</h1>
                                                </div>
                                                <div class="right">
                                                    <a href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#famo-modal-add-testimonial">
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>Add
                                                        Testimonial</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <?php $__currentLoopData = $Testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="card rounded testi-box">
                                                        <div class="card-content">
                                                            <div class="card-body cleartfix">
                                                                <div class="media">
                                                                    <div class="media-body mr-1 align-self-center">
                                                                        <h4><?php echo e($key->client_name); ?></h4>
                                                                        <p class="famo-ellipsis"><?php echo e($key->testimonial); ?></p>
                                                                        <h5><?php echo e($key->created_at); ?></h5>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                                class="btn  btn-drop-table btn-sm"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                class="fa fa-ellipsis-v"></i></button>
                                                                        <div class="dropdown-menu dropdown-menu-right"
                                                                             x-placement="bottom-start"
                                                                             style="position: absolute; transform: translate3d(0px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                            <a class="dropdown-item famo-btn-view-testimonial"
                                                                               href="javascript:void(0)"
                                                                               data-id="<?php echo e($key->id); ?>"
                                                                               data-clientName="<?php echo e($key->client_name); ?>"
                                                                               data-testimonial="<?php echo e($key->testimonial); ?>">
                                                                                <i class="fa fa-eye"></i> View</a>
                                                                            <a class="dropdown-item famo-btn-edit-testimonial"
                                                                               href="javascript:void(0)"
                                                                               data-id="<?php echo e($key->id); ?>"
                                                                               data-clientName="<?php echo e($key->client_name); ?>"
                                                                               data-testimonial="<?php echo e($key->testimonial); ?>"><i
                                                                                    class="fa fa-pencil-square-o"></i>Edit</a>
                                                                            <a class="dropdown-item famo-swal-delete"
                                                                               href="javascript:void(0)"
                                                                               data-route="<?php echo e(route('admin.testimonial.delete', ['id' => $key->id])); ?>"><i
                                                                                    class="fa fa-trash"></i> Delete</a>
                                                                        </div>
                                                                    </div>
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
                </section>
            </div>
        </div>
    </div>
    <div class="login-fail-main user change-pass">
        <div class="featured inner">
            <?php echo $__env->make('admin.inc.modal-add-testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.inc.modal-view-testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.inc.modal-edit-testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Testimonials'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/testimonial/index.blade.php ENDPATH**/ ?>