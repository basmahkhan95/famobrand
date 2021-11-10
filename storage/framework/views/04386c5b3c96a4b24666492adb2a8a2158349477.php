<?php $__env->startComponent('mail::message'); ?>
Hello <b><?php echo e($User->name); ?>,</b>

Your account has been blocked. Please contact support.

Thank you,<br>
<b><?php echo e(config('app.name')); ?></b>
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/mail/account-block-notif.blade.php ENDPATH**/ ?>