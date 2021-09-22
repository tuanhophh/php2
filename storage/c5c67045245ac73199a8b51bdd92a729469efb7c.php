;
<?php $__env->startSection('title','Thêm sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-6 offset-3">
        <form action="" method="post" enctype="multipart/form-data" id="cate_form">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" id="" class="form-control">
                <?php if(isset($errors)&& isset($errors['name'])): ?>
                <span class="has-error text-danger"><?php echo e($errors['name']); ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="cate_id" id="" class="form-control">
                    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <input type="file" multiple name="image" class="form-control" id="">
                
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" id="" class="form-control">
                <?php if(isset($errors)&& isset($errors['price'])): ?>
                <span class="has-error text-danger"><?php echo e($errors['price']); ?></span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <a href="<?php echo e(BASE_URL . 'san-pham'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                <button type="submit" class="btn btn-sm btn-primary" name="btnThem">Lưu</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#cate_form').validate({
            rules: {
                name: {
                    required: true,
                    remote: {
                        url: `<?php echo e(BASE_URL); ?>san-pham/check-name`,
                        type: 'post',
                        data: {
                            name: function(){
                                return $(`[name="name"]`).val()
                            }
                        }
                    }
                },
                image: {
                    required: true
                },
                price: {
                    required: true
                },
                
            },
            messages: {
                name: {
                    required: "Hãy nhập tên sản phẩm",
                    remote: "Tên sản phẩm đã tồn tại, hãy chọn sản phẩm khác"
                },
                image: {
                    required: "Hãy nhập ảnh"
                },
                price: {
                    required: "hãy nhập giá!"
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/admin/product/add-form.blade.php ENDPATH**/ ?>