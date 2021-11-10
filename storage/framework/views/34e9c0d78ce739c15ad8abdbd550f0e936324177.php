<?php $__env->startSection('content'); ?>
    <div class="login-main-inner">
        <div class="login-main">
            <div class="row m-0">
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="login-img">
                        <img src="<?php echo e(asset('user/images/login-left.png')); ?>">
                        <h3>Choose<br>Your Name</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="register-main">
                        <h1>Login</h1>
                        <h2>Login to your account</h2>
                        <div class="form-main">
                            <form action="<?php echo e(route('login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="fields">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <i class="fa fa-envelope"></i>
                                            <input id="email" type="email"
                                                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="email" value="<?php echo e(old('email')); ?>" autocomplete="email"
                                                   autofocus>

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
                                        <div class="col-md-12">
                                            <i class="fa fa-lock"></i>
                                            <input id="password" type="password"
                                                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="password" required autocomplete="current-password">
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
                                    <div class="row align-items-end">
                                        <div class="col-md-6 col-6">
                                            <label class="check">Remember me
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-6"><a href="<?php echo e(route('password.request')); ?>" class="forgot-pass">Forgot Password?</a></div>
                                    </div>
                                    <button type="submit" class="form-control">Login<i class="fa fa-angle-right"
                                                                                       aria-hidden="true"></i></button>
                                    <div class="new-user">
                                        <p>Not a Member? Register Now</p>
                                        <a href="<?php echo e(route('register')); ?>" class="login">Register<i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <a href="<?php echo e(url('/')); ?>" class="login back"><i
                                                class="fa fa-long-arrow-left"></i>back to home</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', ['Title' => 'Login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/auth/login.blade.php ENDPATH**/ ?>