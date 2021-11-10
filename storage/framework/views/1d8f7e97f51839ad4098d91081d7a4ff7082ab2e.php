<?php $__env->startSection('content'); ?>
    <div class="app-content content view user add-user edit-pkg">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1><a href="<?php echo e(route('admin.package.index')); ?>" class="back"><i
                                                                class="fa fa-angle-left"></i></a>Package Management</h1>
                                                    <h1>Edit Package Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <form action="<?php echo e(route('admin.package.update', ['id' => $Package->id])); ?>"
                                                  method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="col-12">
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Package Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="name"
                                                                   placeholder="Enter Package Name"
                                                                   class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                   value="<?php echo e(isset($_POST['name']) ? $_POST['name'] : $Package->name); ?>">
                                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Package Type:</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="package_type" <?php $__errorArgs = ['package_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                                                                <option value="">-- Select --</option>
                                                                <?php $__currentLoopData = \App\PackageType::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($type->id); ?>" <?php echo e(old('package_type', $Package->package_type) == $type->id ? 'selected' : ''); ?>><?php echo e($type->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php $__errorArgs = ['package_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Amount</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="amount" placeholder="Enter Amount"
                                                                   id=""
                                                                   class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                   value="<?php echo e(isset($_POST['amount']) ? $_POST['amount'] : $Package->amount); ?>">
                                                            <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Description</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <textarea name="description"
                                                                      id="famo-input-package-description"
                                                                      class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(isset($_POST['description']) ? $_POST['description'] : $Package->description); ?></textarea>
                                                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-6">
                                                            <button
                                                                href="<?php echo e(route('admin.package.show', ['id' => $Package->id])); ?>"
                                                                class="can">Cancel
                                                            </button>
                                                            <button type="submit" class="con">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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

<?php echo $__env->make('admin.layouts.auth', ['Title' => 'Edit Package'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/package/edit.blade.php ENDPATH**/ ?>