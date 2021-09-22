<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $__env->yieldContent('title'); ?></title>
<head>
    <?php echo $__env->make('layout.layout-client.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</head>

<body>
    <!-- header -->
    <?php echo $__env->make('layout.layout-client.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /header -->
    
    
    <?php echo $__env->make('layout.layout-client.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="container mx-auto">
        <div class="flex grid grid-cols-9 gap-8">
            
            
            <?php echo $__env->yieldContent('content-aticle'); ?>
            
            
            
            
            <?php echo $__env->yieldContent('content-aside'); ?>
            
            
            
        </div>
    </div>
    
    
    <?php echo $__env->make('layout.layout-client.content-bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
    
    
    <?php echo $__env->make('layout.layout-client.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /footer -->
    
    <?php echo $__env->make('layout.layout-client.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/layout/layout-client/main.blade.php ENDPATH**/ ?>