<?php $__env->startComponent('mail::message'); ?>
Hello <b><?php echo e($User->name); ?></b>,

Congratulations! Your account has been created.

Your account password is <b><?php echo e($Password); ?></b>

<?php $__env->startComponent('mail::button', ['url' => route('login')]); ?>
Login Here
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thank you,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/mail/send-account-details.blade.php ENDPATH**/ ?>