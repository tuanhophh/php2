@extends('layout.layout-client.detail-product')
@section('title','Trang chủ')
@section('content')

<section class="container mx-auto mt-8">
    <div class="flex grid grid-cols-10 gap-8">
        <div class="grid col-span-8 gap-8">
            @if (!isset($_GET['cateId']))
            {{-- search --}}
            @if (isset($_GET['key']))
            <h2 class="text-center inline-block font-medium text-4xl">Danh sách tìm kiếm</h2>
            <div class="flex grid grid-cols-4 gap-8">
                
                @foreach($pros as $item) 
                
                <div>
                    <div class="product relative overflow-hidden rounded ">
                        <img
                        src="{{$item->image}}" style="width:300px;height:300px">
                        
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
                    <a href="{{BASE_URL}}detail-sanpham?proId={{$item->id}}&cateId={{$item->category->id}}" class=""><h3 class="font-medium hover:text-teal-400">{{$item->name}}</h3>
                    </a>
                    {{-- <del class="text-gray-700">$60.00</del> --}}
                    <span class="text-red-600">${{$item->price}} </span>
                    
                </div>
                @endforeach   
            </div>
            
            @endif
            {{-- /search --}}
            @if(!isset($_GET['key']))
            <div class="flex grid grid-cols-4 gap-8">
                @foreach($products as $item)  
                <div>
                    <div class="product relative overflow-hidden rounded ">
                        <img
                        src="{{$item->image}}" style="width:300px;height:300px">
                        
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
                    <a href="{{BASE_URL}}/detail-sanpham?proId={{$item->id}}&cateId={{$item->category->id}}" class=""><h3 class="font-medium hover:text-teal-400">{{$item->name}}</h3>
                    </a>
                    {{-- <del class="text-gray-700">$60.00</del> --}}
                    <span class="text-red-600">${{$item->price}} </span>
                    
                </div>
                @endforeach   
            </div>
            @endif
            
            @endif
            {{-- ===== --}}
            @if (isset($_GET['cateId']))
            <div class="flex grid grid-cols-4 gap-8">
                @foreach($categories as $item)  
                <div>
                    <div class="product relative overflow-hidden rounded ">
                        <img
                        src="{{$item->image}}" style="width:300px;height:300px">
                        
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
                    <a href="{{BASE_URL}}detail-sanpham?proId={{$item->id}}&cateId={{$item->category->id}}" class="">
                        <h3 class="font-medium hover:text-teal-400">{{$item->name}}</h3>
                    </a>
                    {{-- <del class="text-gray-700">$60.00</del> --}}
                    <span class="text-red-600">${{$item->price}} </span>
                    
                </div>
                @endforeach   
            </div>
            
            @endif
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
                            @foreach($cates as $item)
                            <li>
                                <a href="{{BASE_URL}}shop?cateId={{$item->id}}"
                                    class="py-2 pl-6 block border-b border-gray-600 hover:bg-gray-600" style="width: 230px">{{$item->cate_name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

