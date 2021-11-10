<?php $__env->startSection('content'); ?>
    <section class="register loginn">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xl-3"></div>
                <div class="col-md-8 col-xl-6 col-12">
                    <div class="register-main">
                        <img src="<?php echo e(asset('admin/images/logo-reg.png')); ?>" class="img-full" alt="logo">
                        <div class="form-main">
                            <h1><?php echo e(__('Reset Password')); ?></h1>
                            <form action="<?php echo e(route('admin.password.update')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="token" value="<?php echo e($token); ?>">
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input spellcheck="true" type="email"
                                                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   value="<?php echo e($email ?? old('email')); ?>" name="email" spellcheck="true"
                                                   placeholder="Enter Email Address">
                                            <?php $__errorArgs = ['email'];
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
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <input spellcheck="true" type="password"
                                                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   value="" name="password" spellcheck="true"
                                                   placeholder="Enter New Password">
                                            <?php $__errorArgs = ['password'];
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
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <input spellcheck="true" type="password"
                                                   class="form-control"
                                                   value="" name="password_confirmation" spellcheck="true"
                                                   placeholder="Re-type Password">
                                        </div>
                                    </div>
                                    <button type="submit" class="form-control"><?php echo e(__('Reset Password')); ?></button>
                                    <a href="<?php echo e(route('admin.login')); ?>" class="login back"><i
                                            class="fa fa-long-arrow-left"></i>back to login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xl-3"></div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/auth/passwords/reset.blade.php ENDPATH**/ ?>