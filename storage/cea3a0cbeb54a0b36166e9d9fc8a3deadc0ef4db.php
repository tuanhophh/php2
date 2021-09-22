
<?php $__env->startSection('title','Gallery'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>san pham</th>
            <th>Anh</th>
            <th>
                <a href="<?php echo e(BASE_URL); ?>./product-gallery/addGal" class="btn btn-sm btn-success">tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td ><?php echo e($item->getGallery->name); ?></td>
                <td><img src="<?php echo e($item->image); ?>" alt="" class="" width="100px"></td>
                <td>
                    <a href="<?php echo e(BASE_URL.'product-gallery/editGal/'.$item->id); ?>" class="btn btn-sm btn-primary">sửa</a>
                    <a href="<?php echo e(BASE_URL.'product-gallery/deleteGal/'.$item->id); ?>" onclick="return confirm('ban co muon xoa')" class="btn btn-sm btn-danger">xóa</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/admin/gallery/Gallery.blade.php ENDPATH**/ ?>