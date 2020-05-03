<?php echo $__env->make('blog.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('into-header'); ?>
<?php echo $__env->yieldContent('main'); ?>
<?php echo $__env->make('blog.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\node.js\salurkandana\resources\views/template.blade.php ENDPATH**/ ?>