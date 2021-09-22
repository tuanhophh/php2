@extends('layout.layout-client.detail-product')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<section class="container mx-auto flex mt-6">
    {{-- @foreach($products as $item) --}}
    <div class="w-1/2">
        <div class="grid grid-row-4 grid-flow-col gap-4">
            {{-- <div class="row-span-1 col-span-1">
                <a href="#"><img
                    src="https://cdn.shopify.com/s/files/1/0332/6420/5963/products/nlota2087710739_q1_2-0_07c22d55-2acd-4583-89a2-3da543ee4407_540x.jpg?v=1606196154" class="rounded" style="width:100px;height:100px"></a>
                </div> --}}
                {{-- @foreach($gals as $item)
                    <div class="row-span-1 col-span-1">
                        <a href="{{$item->id}}">{{$item->img_url}}</a>
                        <img src="https://lavenderstudio.com.vn/wp-content/uploads/2019/09/chup-hinh-quang-cao-quan-ao.jpg" alt="" class="">
                    </div>
                    
                    @endforeach --}}
                    {{-- <div class="row-span-1 col-span-1">
                        <a href="#"><img
                            src="./img/anh2.jpg" class="rounded" style="width:100px;height:100px"></a>
                        </div>
                        <div class="row-span-1 col-span-1">
                            <a href="#"><img
                                src="https://cdn.shopify.com/s/files/1/0332/6420/5963/products/nlota2087710739_q3_2-0_8714d20a-1979-491c-9ccc-c4f436e8cd11_540x.jpg?v=1606196155" class="rounded" style="width:100px;height:100px"></a>
                            </div> --}}
                            
                            <div class="row-span-4 col-span-4">
                                <a href="#"><img
                                    src="{{$products->image}}" class="rounded" style="width:400px;height:450px"></a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-8 w-1/2">
                            <h2 class="font-bold uppercase text-base md:text-xl mb-2">{{$products->name}}</h2>
                            <h3><span class="   mb-2  text-base md:text-lg">Danh mục: {{$products->category->cate_name}}</span></h3>
                            <div class="flex justify-between">
                                
                                <span class=" justify-start  mb-2 text-base md:text-base">Price: ${{$products->price}}</span>
                                <div class=" justify-end">
                                    <i class="fas fa-star text-yellow-600"></i>
                                    <i class="fas fa-star text-yellow-600"></i>
                                    <i class="fas fa-star text-yellow-600"></i>
                                    <i class="fas fa-star text-yellow-600"></i>
                                    <i class="far fa-star "></i>
                                </div>
                            </div>
                            <p class="text-sm md:text-base hidden md:block">Thông tin: {{$products->detail}}</p>
                            
                            <div class="flex">
                                <div class="flex border border-black px-2 md:px-4 py-1 mt-5 rounded-full">
                                    <div class="flex text-sm md:text-lg">
                                        <button class=" md:mx-1 ">-</button>
                                        <span class="mx-1 md:mx-3 mt-1 md:mt-0">1</span>
                                        <button class=" md:mx-1 hover:text-teal-400">+</button>
                                    </div>
                                </div>
                                <div>
                                    <button
                                    class="text-white bg-teal-400 hover:bg-black text-base md:text-lg uppercase mt-5 rounded-full px-2 md:px-4 py-1 fobt-bold ml-5 border border-teal-400 hover:border-black">add
                                    to cart</button>
                                </div>
                                
                                
                                
                            </div>
                            <div class="mt-5 hidden md:block ">
                                <img src="https://cdn.shopify.com/s/files/1/0332/6420/5963/files/trust_img2_360x.png?v=1587092488">
                            </div>
                            <div class="flex mt-2 ml-3 pt-2  border-t border-black">
                                <span class="text-lg">This is: </span>
                                <div class="ml-2">
                                    <i class="fab fa-facebook-f mr-2"></i>
                                    <i class="fab fa-twitter mr-2"></i>
                                    <i class="fab fa-instagram mr-2"></i>
                                    <i class="fab fa-linkedin-in mr-2"></i>
                                    <i class="fab fa-pinterest-p mr-2"></i>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-lg mt-2">Comment:</p>
                                <form action="" method="post" class="relative mt-4">
                                    <textarea name="" id="" cols="75" rows="2"  placeholder="" class="outline-none border border-black pl-3 rounded"></textarea>
                                    <button type="submit" class="outline-none absolute top-0 right-0 mt-3 mr-3 border border-black  rounded  text-center">Gửi</button>
                                </form>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </section>
                    <!-- san pham chi tiet-->
                    <div class="container mx-auto">
                        <h2 class="text=black text-center text-3xl font-medium mt-24 mb-12">You may also like</h2>
                        <section class="container mx-auto mt-8">
                            <div class="flex grid grid-cols-4 gap-8">
                                @foreach($categories as $item)  
                                <div>
                                    <div class="product relative overflow-hidden rounded ">
                                        <img
                                        src="{{$item->image}}"style="width:300px;height:300px">
                                        
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
                                    <a href="{{BASE_URL}}./detail-sanpham?proId={{$item->id}}&cateId={{$item->category->id}}" class="">
                                        <h3 class="font-medium hover:text-teal-400">{{$item->name}}</h3>
                                    </a>
                                    {{-- <del class="text-gray-700">$60.00</del> --}}
                                    <span class="text-red-600">${{$item->price}} </span>
                                    
                                </div>
                                @endforeach   
                            </div>
                            
                        </section>
                        <!--san pham sale-->
                    </div>
                    @endsection