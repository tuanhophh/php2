
<?php $__env->startSection('title','Trang chủ'); ?>
<?php $__env->startSection('content'); ?>

<section class="container mx-auto mt-8">
    <div class="flex grid grid-cols-10 gap-8">
        <div class="grid col-span-8 gap-8">
            <?php if(!isset($_GET['cateId'])): ?>
            
            <?php if(isset($_GET['key'])): ?>
            <h2 class="text-center inline-block font-medium text-4xl">Danh sách tìm kiếm</h2>
            <div class="flex grid grid-cols-4 gap-8">
                
                <?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                
                <div>
                    <div class="product relative overflow-hidden rounded ">
                        <img
                        src="<?php echo e($item->image); ?>" style="width:300px;height:300px">
                        
                        <div class="quick-hover flex flex-col justify-center items-center ">
                            <div class="button-hover relative overflow-hidden">
                                <button
                                class="bg-white text-black py-1 px-1 md:py-2 md:px-6 rounded-full mb-3">Quick
                                View</button>
                                <div class="button-hover-eye   px-3 rounded-full mb-3 items-center">
                                    <a href="#" class=" mx-6 md:mt-3 md:mx-10"><i class="far fa-eye "></i></a>
                                </div>
                            </div>
                            <div class="button-hover relative overflow-hidden">
                                <button
                                class="bg-white text-black px-1 py-1 md:py-2 md:px-6 rounded-full ">Quick
                                Shop</button>
                                <div class="button-hover-eye  px-4  rounded-full ">
                                    <a href="#" class="mx-5 md:mt-3 md:mx-10"><i
                                        class="fas fa-cart-arrow-down items-center"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    <a href="<?php echo e(BASE_URL); ?>detail-sanpham?proId=<?php echo e($item->id); ?>&cateId=<?php echo e($item->category->id); ?>" class=""><h3 class="font-medium hover:text-teal-400"><?php echo e($item->name); ?></h3>
                    </a>
                    
                    <span class="text-red-600">$<?php echo e($item->price); ?> </span>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>
            
            <?php endif; ?>
            
            <?php if(!isset($_GET['key'])): ?>
            <div class="flex grid grid-cols-4 gap-8">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div>
                    <div class="product relative overflow-hidden rounded ">
                        <img
                        src="<?php echo e($item->image); ?>" style="width:300px;height:300px">
                        
                        <div class="quick-hover flex flex-col justify-center items-center ">
                            <div class="button-hover relative overflow-hidden">
                                <button
                                class="bg-white text-black py-1 px-1 md:py-2 md:px-6 rounded-full mb-3">Quick
                                View</button>
                                <div class="button-hover-eye   px-3 rounded-full mb-3 items-center">
                                    <a href="#" class=" mx-6 md:mt-3 md:mx-10"><i class="far fa-eye "></i></a>
                                </div>
                            </div>
                            <div class="button-hover relative overflow-hidden">
                                <button
                                class="bg-white text-black px-1 py-1 md:py-2 md:px-6 rounded-full ">Quick
                                Shop</button>
                                <div class="button-hover-eye  px-4  rounded-full ">
                                    <a href="#" class="mx-5 md:mt-3 md:mx-10"><i
                                        class="fas fa-cart-arrow-down items-center"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    <a href="<?php echo e(BASE_URL); ?>/detail-sanpham?proId=<?php echo e($item->id); ?>&cateId=<?php echo e($item->category->id); ?>" class=""><h3 class="font-medium hover:text-teal-400"><?php echo e($item->name); ?></h3>
                    </a>
                    
                    <span class="text-red-600">$<?php echo e($item->price); ?> </span>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>
            <?php endif; ?>
            
            <?php endif; ?>
            
            <?php if(isset($_GET['cateId'])): ?>
            <div class="flex grid grid-cols-4 gap-8">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div>
                    <div class="product relative overflow-hidden rounded ">
                        <img
                        src="<?php echo e($item->image); ?>" style="width:300px;height:300px">
                        
                        <div class="quick-hover flex flex-col justify-center items-center ">
                            <div class="button-hover relative overflow-hidden">
                                
                                <button
                                class="bg-white text-black py-1 px-1 md:py-2 md:px-6 rounded-full mb-3">Quick
                                View</button>
                                <div class="button-hover-eye   px-3 rounded-full mb-3 items-center">
                                    <a href="#" class=" mx-6 md:mt-3 md:mx-10"><i class="far fa-eye "></i></a>
                                </div>
                            </div>
                            <div class="button-hover relative overflow-hidden">
                                <button
                                class="bg-white text-black px-1 py-1 md:py-2 md:px-6 rounded-full ">Quick
                                Shop</button>
                                <div class="button-hover-eye  px-4  rounded-full ">
                                    <a href="#" class="mx-5 md:mt-3 md:mx-10"><i
                                        class="fas fa-cart-arrow-down items-center"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    <a href="<?php echo e(BASE_URL); ?>detail-sanpham?proId=<?php echo e($item->id); ?>&cateId=<?php echo e($item->category->id); ?>" class="">
                        <h3 class="font-medium hover:text-teal-400"><?php echo e($item->name); ?></h3>
                    </a>
                    
                    <span class="text-red-600">$<?php echo e($item->price); ?> </span>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>
            
            <?php endif; ?>
        </div>
        <div class="flex grid col-span-2">
            <div class="">
                <input type="text" name="" id="" placeholder="Search here"
                class="px-1 py-1 pl-2 outline-none border border-black rounded-lg" style="width: 160px">
                <button type="submit"
                class=" px-1 py-1 outline-none ml-1 border border-black rounded-lg" style="width: 60px">Search</button>
                
                <div class="mt-2">
                    <h3 class="bg-black text-white  text-xl font-bold uppercase  rounded">
                        <a href="#" id="btn-cate"><i class="fas fa-bars ml-6"></i>
                        </a>
                        <span class="inline-block text-center ml-4"> categories</span>
                        
                    </h3>
                    
                    <div>
                        <ul id="menu-cate" class="">
                            <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(BASE_URL); ?>shop?cateId=<?php echo e($item->id); ?>"
                                    class="py-2 pl-6 block border-b border-gray-600 hover:bg-gray-600" style="width: 230px"><?php echo e($item->cate_name); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.layout-client.detail-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\app\xampp\htdocs\web3013\demo\lesson6\app\views/clients/shop.blade.php ENDPATH**/ ?>