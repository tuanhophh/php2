;
<?php $__env->startSection('title','Thêm sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
<form action="" method="post" enctype="multipart/form-data" id="cate_form">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <br>
                <img src="<?php echo e(BASE_URL.'/'.$gal->image); ?>" alt="" width="100px">
                <input type="file" multiple name="image" class="form-control" id="" >
            </div>
            
            
            <div class="form-group">
                <label for="">Sản phẩm</label>
                <select name="product_id" id="" class="form-control">
                    
                        <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php if($item->id == $gal->product_id): ?>
                            selected
                            <?php endif; ?>><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo e(BASE_URL . 'san-pham'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/admin/gallery/edit-form.blade.php ENDPATH**/ ?>