
<?php $__env->startSection('title', 'Mobile Setting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Mobile Setting';
$data['title'] = 'Setting';
$data['title1'] = 'Mobile Setting';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">&times;</span></button></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="card-title"><?php echo e(__('Mobile Setting')); ?></h5>
                </div>
                <div class="card-body">
                    <form class="form" action="<?php echo e(route('mobile.update')); ?>" method="POST" novalidate
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="form-group col-md-12">
                                    <div class="col-lg-6">
                                        <label class="text-dark"><?php echo e(__('Enable For Mobile')); ?> :</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="checkbox" class="custom_toggle" id="customSwitch1" name="setting_enable" <?php echo e($msetting->setting_enable == 1 ? 'checked' : ''); ?> />
                                    </div>
                                    <small class="text-primary">
                                        <i class="feather icon-help-circle"></i> <?php echo e(__("If you enabled  the toggle frontend is been disabled and and show landing page")); ?>

                                      </small>
                                </div>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i>
                                <?php echo e(__("Reset")); ?></button>
                            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                <?php echo e(__("Update")); ?></button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mm9mvjkm3u88/public_html/resources/views/admin/mobile/setting.blade.php ENDPATH**/ ?>