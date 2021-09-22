@extends('layout.layout-client.main')
@section('title','Trang chủ')
@section('content-aticle')
<div class="grid col-span-7">
    <div class="container mx-auto mt-12">
        <div class="flex flex-col items-center ">
            
            <div class="inline-block text-2xl font-bold uppercase  relative">
                @if (!isset($_GET['cateId']))    
                trending
                @endif
                @if(isset($_GET['cateId']))    
                @foreach($categories as $item)
                {{$item->category->cate_name}}
                @endforeach
                @endif
            </div>
            <span class="text-lg text-gray-600"
            style="font-family: Libre Baskerville; font-style: italic;">Top view in
            this week</span>
        </div>
    </div>
    <section class="container mx-auto mt-8">
        
        @if (!isset($_GET['cateId']))
        
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
                <a href="{{BASE_URL}}detail-sanpham?proId={{$item->id}}&cateId={{$item->category->id}}" class=""><h3 class="font-medium hover:text-teal-400">{{$item->name}}</h3>
                </a>
                {{-- <del class="text-gray-700">$60.00</del> --}}
                <span class="text-red-600">${{$item->price}} </span>
                
            </div>
            @endforeach   
        </div>
        
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
    </section>
</div>

@endsection

@section('content-aside')
<div class="grid col-span-2">
    <div class="mt-24">
        <div class="mt-12">
            <h3 class="bg-black text-white  text-xl font-bold uppercase  rounded">
                <a href="#" id="btn-cate"><i class="fas fa-bars ml-6"></i>
                </a>
                <span class="inline-block text-center ml-4"> categories</span>
                
            </h3>
            
            <div>
                <ul id="menu-cate" class="">
                    @foreach($cates as $item)
                    <li>
                        <a href="{{BASE_URL}}?cateId={{$item->id}}"
                            class="py-2 px-8 block border-b border-gray-600 hover:bg-gray-600">{{$item->cate_name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
