
<?php $__env->startSection('title','danh sách danh mục'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>tên danh mục</th>
            <th>hiển thị menu</th>
            <th>số lượng sản phẩm</th>
            
            <th>
                <a href="<?php echo e(BASE_URL.'danh-muc/addCate'); ?>" class="btn btn-sm btn-success">tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->cate_name); ?></td>
                <td><?php echo e($item->show_menu==1 ? "có" : "không"); ?></td>
                <td><?php echo e(count($item->products)); ?></td>
                
                <td>
                    <a href="<?php echo e(BASE_URL.'danh-muc/editCate/'.$item->id); ?>" class="btn btn-sm btn-primary">sửa</a>
                    <a href="<?php echo e(BASE_URL.'danh-muc/deleteCate/'.$item->id); ?>" onclick="return confirm('ban co muon xoa')" class="btn btn-sm btn-danger">xóa</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/admin/category/index.blade.php ENDPATH**/ ?>