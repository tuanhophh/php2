
<?php $__env->startSection('title','upload'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">chon anh</label>
            <input type="file" name="image[]" id="" multiple class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-danger">Upload</button>
        </div>
        
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/admin/product/upload-form.blade.php ENDPATH**/ ?>