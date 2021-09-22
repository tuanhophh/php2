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
    {{-- content   --}}
    @yield('content')
    {{-- content --}}
    {{-- footer --}}
    @include('layout.layout-client.footer')
    <!-- /footer -->
    {{-- script --}}
    @include('layout.layout-client.script')
    {{-- /script --}}
</body>

</html>