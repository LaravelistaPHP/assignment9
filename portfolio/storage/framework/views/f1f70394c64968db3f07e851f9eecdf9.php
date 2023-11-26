<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->yieldContent('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/output.css')); ?>">
</head>

<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <div class="container max-w-7xl mx-auto mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div class="w-full">
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>

</html>
<?php /**PATH D:\my projects\phpAssignment\Assignment 9\portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>