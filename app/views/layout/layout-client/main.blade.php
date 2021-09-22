<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<head>
    @include('layout.layout-client.style')
    
</head>

<body>
    <!-- header -->
    @include('layout.layout-client.header')
    <!-- /header -->
    
    {{-- banner --}}
    @include('layout.layout-client.banner')
    {{-- /banner --}}
    <div class="container mx-auto">
        <div class="flex grid grid-cols-9 gap-8">
            
            {{-- atilce --}}
            @yield('content-aticle')
            {{-- @include('layout.layout-client.content-aticle') --}}
            {{-- /aticle --}}
            
            {{-- aside --}}
            @yield('content-aside')
            {{-- @include('layout.layout-client.content-aside') --}}
            {{-- /aside --}}
            
        </div>
    </div>
    
    {{-- bottom --}}
    @include('layout.layout-client.content-bottom')
    {{-- /bottom --}} 
    
    {{-- footer --}}
    @include('layout.layout-client.footer')
    <!-- /footer -->
    {{-- script --}}
    @include('layout.layout-client.script')
    {{-- /script --}}
</body>

</html>