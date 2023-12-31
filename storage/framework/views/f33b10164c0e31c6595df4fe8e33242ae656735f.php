
<?php $__env->startSection('title','All Menus'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'All Menu';
$data['title'] = 'Menu';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <div class="row">

        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <h5 class="box-title"><?php echo e(__('All Menu')); ?> </h5>
                    <div>
                        <div class="widgetbar">
                            <a href="<?php echo e(url('admin/menu/create')); ?>" class="float-right btn btn-primary-rgba mr-2"><i
                                    class="feather icon-plus mr-2"></i><?php echo e(__('Add Menus')); ?> </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th><?php echo e(__('Menu Tittle')); ?></th>
                                    <th><?php echo e(__('Info')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>

                                        <?php echo e($key+1); ?>


                                    </td>
                                    <td><?php echo e($policy->title); ?></td>
                                    <td>
                                        <p>
                                            <?php if($policy->link_by == 'page'): ?>
                                            <b><?php echo e(__("Linked to:")); ?></b> <?php echo e(__("Page")); ?>

                                            <?php else: ?>
                                            <b><?php echo e(__("Linked to:")); ?></b> <?php echo e(__('URL')); ?>

                                            <?php endif; ?>
                                        </p>
                                        <p> <b><?php echo e(__('Status:')); ?> </b>
                                            <?php if($policy->status == '1'): ?>
                                            <span class="badge badge-success"><?php echo e(__("Active")); ?></span>
                                            <?php else: ?>
                                            <span class="badge badge-danger">
                                                <?php echo e(__("Deactive")); ?>

                                            </span>
                                            <?php endif; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-round btn-outline-primary" type="button"
                                                id="CustomdropdownMenuButton1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="feather icon-more-vertical-"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                                <a class="dropdown-item"
                                                    href="<?php echo e(url('admin/menu/'.$policy->id.'/edit')); ?>"><i
                                                        class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                                                <a class="dropdown-item btn btn-link" data-toggle="modal"
                                                    data-target="#delete<?php echo e($policy->id); ?>">
                                                    <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- delete Modal start -->
                                       
                                    </td>
                                    <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($policy->id); ?>"
                                        tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleSmallModalLabel">
                                                        <?php echo e(__('Delete')); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                                    <p><?php echo e(__('Do you really want to delete')); ?> ?
                                                        <?php echo e(__('This process cannot be undone.')); ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="post" action="<?php echo e(url('admin/menu/'.$policy->id)); ?>"
                                                        class="pull-right">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field("DELETE")); ?>

                                                        <button type="reset" class="btn btn-secondary"
                                                            data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                        <button type="submit"
                                                            class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mm9mvjkm3u88/public_html/resources/views/admin/menu/index.blade.php ENDPATH**/ ?>