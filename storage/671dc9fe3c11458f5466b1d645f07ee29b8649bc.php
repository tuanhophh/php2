
<?php $__env->startSection('title','Sản phẩm'); ?>



<?php $__env->startSection('content'); ?>

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>san pham</th>
            <th>danh muc</th>
            <th>Anh</th>
            <th>gia</th>
            <th>detail</th>
            <th>
                <a href="<?php echo e(BASE_URL); ?>./san-pham/addPro" class="btn btn-sm btn-success">tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->category->cate_name); ?></td>
                <td><img src="<?php echo e($item->image); ?>" alt="" class="" width="100"></td>
                <td><?php echo e($item->price); ?></td>
                <td><?php echo e($item->detail); ?></td>
                
                
                <td>
                    <a href="<?php echo e(BASE_URL.'san-pham/editPro/'.$item->id); ?>" class="btn btn-sm btn-primary">sửa</a>
                    <a href="<?php echo e(BASE_URL.'san-pham/deletePro/'.$item->id); ?>" onclick="return confirm('ban co muon xoa')" class="btn btn-sm btn-danger">xóa</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/admin/product/Product.blade.php ENDPATH**/ ?>