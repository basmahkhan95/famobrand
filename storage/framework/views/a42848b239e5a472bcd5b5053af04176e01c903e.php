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
                        <h1>Forgot Password</h1>
                        <h2>Please enter your email</h2>
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="form-main">
                            <form action="<?php echo e(route('password.email')); ?>" method="post">
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
                                    </div>

                                    <button type="submit" class="form-control"><?php echo e(__('Send Password Reset Link')); ?><i class="fa fa-angle-right"
                                                                                       aria-hidden="true"></i></button>
                                    <div class="new-user">
                                        <p>Not a Member? Register Now</p>
                                        <a href="<?php echo e(route('register')); ?>" class="login">Register<i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <a href="<?php echo e(route('login')); ?>" class="login back"><i
                                                class="fa fa-long-arrow-left"></i>back to login</a>
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

<?php echo $__env->make('layouts.login', ['Title' => 'Forgot Password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>