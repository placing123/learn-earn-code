
<?php $__env->startSection('title', 'Add Truested Slider - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Add Truested Slider';
$data['title'] = 'Truested Slider';
$data['title1'] = 'Add Truested Slider';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
  <?php if($errors->any()): ?>  
  <div class="alert alert-danger" role="alert">
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
  <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true" style="color:red;">&times;</span></button></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </div>
  <?php endif; ?>
<div class="row">
    <div class="col-lg-12">
      <div class="card dashboard-card m-b-30">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__('Add')); ?> <?php echo e(__('TrustedSlider')); ?></h5>
          <div>
            <div class="widgetbar">
              <a href="<?php echo e(url('trusted')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
          
            </div>
          </div>
        </div>
        <div class="card-body">

          <form id="demo-form2" method="post" action="<?php echo e(url('trusted/')); ?>" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            

            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputTit1e"><?php echo e(__('URL')); ?>:<sup class="redstar">*</sup></label>
                    <input class="form-control" required type="url" name="url" placeholder="Please Enter Your trusted Url">
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputSlug"><?php echo e(__('Image')); ?>:<sup class="redstar">*</sup></label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                  </div>
                  <div class="custom-file">
                    <input type="file"name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                  </div>
                </div>
              </div>
                    
                    

              <div  class="form-group col-md-6">
                <label for="exampleInputDetails"><?php echo e(__('Status')); ?>:</label>
                <input  id="status" type="checkbox" name="status" class="custom_toggle" checked />
                <input type="hidden"  name="free" value="0" for="status" id="status">
               
              </div>
              
                
             
            </div>
            <div class="form-group">
							<button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
							<button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
							<?php echo e(__("Create")); ?></button>
						</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mm9mvjkm3u88/public_html/resources/views/admin/trusted/insert.blade.php ENDPATH**/ ?>