<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(@$Title.' - '.config('app.name')); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('admin/images/favicon.png')); ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/vendors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/app.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('admin/app-assets/vendors/css/forms/selects/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css') }}"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/responsive.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded" data-open="click" data-menu="vertical-menu"
      data-col="2-columns">

<?php echo $__env->yieldContent('content'); ?>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="<?php echo e(asset('admin/app-assets/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/datatables.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/js/scripts/tables/datatables/datatable-basic.js')); ?>"
        type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/vendors/js/extensions/moment.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/js/core/app-menu.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/js/core/app.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/js/scripts/customizer.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/js/scripts/modal/components-modal.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/vendors/js/forms/select/select2.full.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('admin/app-assets/js/scripts/forms/select/form-select2.js')); ?>"
        type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".dataTables_filter input").attr("placeholder", "Search");
    });
</script>

<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH /home/dev61onlinetesti/public_html/famo_brand/resources/views/admin/layouts/guest.blade.php ENDPATH**/ ?>