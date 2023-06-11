
<?php $__env->startSection('title', 'All Language - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'All Language';
$data['title'] = 'All Language';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <div class="row">
        <?php if($errors->any()): ?>  
            <div class="alert alert-danger" role="alert">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="color:red;">&times;</span></button></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </div>
        <?php endif; ?>
        <!-- row started -->
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('All Language')); ?></h5>
                </div>
                <!-- card body started -->
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- table to display faq start -->
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <th>#</th>
                                <th><?php echo e(__('Language Traslation')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><b> ar.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/ar.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><b> bn.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/bn.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><b> de.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/de.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><b> en.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/en.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><b> es.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/es.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td><b> et.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/et.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td><b> fa.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/fa.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td><b> fr.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/fr.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td><b> hi.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/hi.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td><b> it.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/it.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td><b> ko.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/ko.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><b> nl.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/nl.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td><b> pl.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/pl.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td><b> pt-br.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/pt-br.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td><b> pt.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/pt.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td><b> ro.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/ro.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td><b> ru.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/ru.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td><b> tr.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/tr.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">19</th>
                                    <td><b> ur.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/ur.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">20</th>
                                    <td><b> zh-CN.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/zh-CN.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td><b> zh-TW.json </b></td>
                                    <td><a class="btn btn-primary" href="<?php echo e(url('change/json/zh-TW.json')); ?>"><?php echo e(__("Edit")); ?></a></td>
                                </tr> 
                            </tbody>
                        </table>                  
                        <!-- table to display faq data end -->                
                    </div><!-- table-responsive div end -->
                </div><!-- card body end -->
                
            </div><!-- col end -->
        </div>
    </div>
</div><!-- row end -->
<?php $__env->stopSection(); ?>
<!-- main content section ended -->
<!-- This section will contain javacsript start -->
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mm9mvjkm3u88/public_html/resources/views/admin/changeword/index.blade.php ENDPATH**/ ?>