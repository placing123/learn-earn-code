<?php $__env->startComponent('mail::message'); ?>
# Gift Course

<?php echo e($x); ?>


<?php echo e($order->user->fname); ?> <?php echo e($order->user->lname); ?> Enrolled in <?php echo e($order->courses->title); ?>


Email: <?php echo e(optional($order->user)->email); ?> <br>
Password: 123456

<?php $__env->startComponent('mail::button', ['url' => route('view.order', $order_id)]); ?>
See Gift
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e($course->user->email); ?> <br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/mm9mvjkm3u88/public_html/resources/views/email/GiftOrder.blade.php ENDPATH**/ ?>