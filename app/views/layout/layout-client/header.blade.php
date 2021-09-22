<header>
    <div class="mx-auto">
        <div class="flex justify-between text-lg">
            <div class="flex ml-5 my-5 ">
                <a href="index.html"><img
                    src="https://cdn.shopify.com/s/files/1/0332/6420/5963/files/kalles_2x_d285afa0-dcc0-4663-80cc-93478c8881de_140x@2x.png?v=1581496822"
                    width="95"></a>
                </div>
                <ul class="md:flex hidden mt-4 my-5  items-center">
                    <li> <a href="{{BASE_URL}}" class="mx-5 hover:text-teal-400">Home</a></li>
                    <li> <a href="{{BASE_URL}}shop" class="mx-5 hover:text-teal-400">Shop</a></li>
                    
                    <li><a href="product.html" class="mx-5 hover:text-teal-400">Product</a></li>
                    <li><a href="blog.html" class="mx-5 hover:text-teal-400">Blog</a></li>
                    <li><a href="contact.html" class="mx-5 hover:text-teal-400">Contact</a></li>
                    {{-- <li><a href="{{BASE_URL}}/admin" class="mx-5 hover:text-teal-400">Admin</a></li> --}}
                </ul>
                <div class="flex my-5 mr-6">
                    <form action="{{BASE_URL}}shop" method="get">
                        <div class="mr-6">
                            <input type="text" name="key" id="" placeholder="Search here"
                            class=" outline-none pl-2 text-sm border border-black rounded-lg" style="height: 30px">
                            <button type="submit"
                            class=" px-1  outline-none text-sm border border-black rounded-lg" style="height: 30px">Search</button>
                        </div>
                    </form>
                    @if(isset($_SESSION['AUTH']))
                    <a href="{{BASE_URL}}./admin" class="mr-3 hover:text-teal-400">{{$_SESSION['AUTH']['name']}}</a><span class="mr-2">|</span>
                    <a href="{{BASE_URL}}./logout" class="hover:text-teal-400">Sign Out</a>
                    
                    @else
                    <a href="{{BASE_URL}}./login" class="mr-3 hover:text-teal-400">Sign in</a><span class="mr-2">|</span>
                    <a href="{{BASE_URL}}./logout" class="hover:text-teal-400">Sign Up</a>  
                    @endif
                    <div class="flex md:hidden">
                        <a href="#" class="mr-3 hover:text-teal-400 ml-5" id="btnMenu"><i class="fas fa-bars"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        <ul id="btnShowMenu" class=" hidden mt-2 md:mt-0 my-5  items-center">
            <li> <a href="index.html" class="mx-5 hover:text-teal-400">Home</a></li>
            
            <li> <a href="shop.html" class="mx-5 hover:text-teal-400">Shop</a></li>
            <li><a href="product.html" class="mx-5 hover:text-teal-400">Product</a></li>
            <li><a href="blog.html" class="mx-5 hover:text-teal-400">Blog</a></li>
            <li><a href="contact.html" class="mx-5 hover:text-teal-400">Contact</a></li>
            
        </ul>
    </header>