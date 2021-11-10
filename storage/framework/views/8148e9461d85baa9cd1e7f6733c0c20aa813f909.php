<?php $__env->startSection('content'); ?>
    <section class="register loginn">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xl-3"></div>
                <div class="col-md-8 col-xl-6 col-12">
                    <div class="register-main">
                        <img src="<?php echo e(asset('admin/images/logo-reg.png')); ?>" class="img-full" alt="logo">
                        <div class="form-main">
                            <h1>Login to your account</h1>
                            <form action="<?php echo e(route('admin.login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input spellcheck="true" type="email" name="email"
                                                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   spellcheck="true"
                                                   placeholder="Email Address" value="<?php echo e(old('email')); ?>">
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
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-key"></i>
                                            <input spellcheck="true" type="password" spellcheck="true"
                                                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="password" placeholder="Password">
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
                                    <div class="row mb-2">
                                        <div class="col-md-6 col-6">
                                            <label class="check">Remember me
                                                <input spellcheck="true" type="checkbox"
                                                       name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-6"><a href="<?php echo e(route('admin.password.request')); ?>">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="form-control">Login</button>
                                    <a href="<?php echo e(route('admin.login')); ?>" class="login back"><i class="fa fa-long-arrow-left"></i>back to
                                        Home</a>
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

<?php echo $__env->make('admin.layouts.guest', ['Title' => 'Login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>