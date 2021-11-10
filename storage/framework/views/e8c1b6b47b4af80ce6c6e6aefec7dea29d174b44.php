<?php $__env->startSection('content'); ?>
    <div class="app-content content view user">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <?php echo $__env->make('admin.inc.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1>Package Management</h1>
                                                    <h1>Packages</h1>
                                                </div>
                                                <div class="right">
                                                    <a href="<?php echo e(route('admin.package.create')); ?>"><i
                                                            class="fa fa-plus-circle"
                                                            aria-hidden="true"></i> Add Package</a>
                                                </div>
                                            </div>
                                        </div>

















                                        <div class="row maain-tabble mt-1">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>S#</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $Packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($key + 1); ?></td>
                                                        <td><span data-toggle="popover" data-content="johny"
                                                                  class="circle"
                                                                  style="background: #f61454;"><?php echo e($value->name[0]); ?></span><?php echo e($value->name); ?>

                                                        </td>
                                                        <td><?php echo e(@$value->package_type()->first()->name); ?></td>
                                                        <td><?php echo e($value->amount); ?></td>
                                                        <td>
                                                            <div class="btn-group mr-1 mb-1">
                                                                <button type="button" class="btn  btn-drop-table btn-sm"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"><i
                                                                        class="fa fa-ellipsis-v"></i></button>
                                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                                     style="position: absolute; transform: translate3d(4px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                    <a class="dropdown-item"
                                                                       href="<?php echo e(route('admin.package.show',['id' => $value->id])); ?>"><i
                                                                            class="fa fa-eye"></i>View</a>
                                                                    <a class="dropdown-item"
                                                                       href="<?php echo e(route('admin.package.edit',['id' => $value->id])); ?>"><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>Edit</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
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

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Packages'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/package/index.blade.php ENDPATH**/ ?>