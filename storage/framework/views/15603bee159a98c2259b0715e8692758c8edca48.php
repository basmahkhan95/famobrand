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
                                                    <h1>User Management</h1>
                                                    <?php if(isset($_GET['is_block'])): ?>
                                                        <h1 class="pull-left">
                                                            <a href="<?php echo e(route('admin.user.index')); ?>" class="back">
                                                                <i class="fa fa-angle-left"></i>
                                                            </a>Blocked Users
                                                        </h1>
                                                    <?php else: ?>
                                                        <h1>Users</h1>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="right">
                                                    <?php if(!isset($_GET['is_block'])): ?>:
                                                    <a href="<?php echo e(route('admin.user.index', ['is_block' => true])); ?>"><i
                                                            class="fa fa-ban" aria-hidden="true"></i> Blocked Users</a>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(route('admin.user.create')); ?>"><i
                                                            class="fa fa-plus-circle" aria-hidden="true"></i> Add
                                                        User</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2 filter-main justify-content-between">

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="row align-items-end justify-content-end">
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">
                                                        <label>Filter By:</label>
                                                        <label for="">From:</label>
                                                        <input id="fromSelector" type="text" data-index="3" readonly>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">
                                                        <label for="">To:</label>
                                                        <input id="toSelector" type="text" readonly>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row maain-tabble mt-1">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>S#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Registered Since</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($key + 1); ?></td>
                                                        <td><span data-toggle="popover"
                                                                  data-content="<?php echo e($value->name); ?>"
                                                                  class="circle"
                                                                  style="background: #f61454;"><?php echo e($value->name[0]); ?></span><?php echo e($value->name); ?>

                                                        </td>
                                                        <td><?php echo e($value->email); ?></td>
                                                        <td><?php echo e($value->created_at); ?></td>
                                                        <td>
                                                            <div class="btn-group mr-1 mb-1">
                                                                <button type="button" class="btn  btn-drop-table btn-sm"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"><i
                                                                        class="fa fa-ellipsis-v"></i></button>
                                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                                     style="position: absolute; transform: translate3d(4px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                    <a class="dropdown-item"
                                                                       href="<?php echo e(route('admin.user.show', ['id' => $value->id])); ?>"><i
                                                                            class="fa fa-eye"></i>View</a>
                                                                    <a class="dropdown-item"
                                                                       href="<?php echo e(route('admin.user.edit', ['id' => $value->id])); ?>"><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>Edit</a>
                                                                    <a class="dropdown-item famo-swal-delete"
                                                                       href="javascript:void(0)"
                                                                       data-route="<?php echo e(route('admin.user.delete', ['id' => $value->id])); ?>"><i
                                                                            class="fa fa-ban"
                                                                            aria-hidden="true"></i><?php echo e(($value->is_block) ? 'unblock' : 'block'); ?>

                                                                    </a>
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

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Users'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/user/index.blade.php ENDPATH**/ ?>