<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
    @include('Libraries.style')
</head>
<body>

    {{-- Navbar --}}
    @include('Components.navbar')

    {{-- Content --}}
    <div class="container-fluid productheader">
        @yield('productheader')
    </div>

    <div class="p-4 container-fluid products">
        <div class="row productsrow">
            @yield('content')
        </div>
    </div>



    <!-- Go to Top Button -->
    @yield('gototop')

    {{-- Footer --}}
    @include('Components.footer')

    {{-- Scripts --}}
    @include('Scripts.script')

</body>
</html>
