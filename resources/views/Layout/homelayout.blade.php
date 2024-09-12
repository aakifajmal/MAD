<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include('Libraries.style')

</head>
<body>

    {{-- navbar --}}
    @include('Components.navbar')

    {{-- content --}}
    @yield('carousel')
    @yield('content')

    <!-- Go to Top Button -->
    @yield('gototop')

    {{-- footer --}}
    @include('Components.footer')

    {{-- scripts --}}
    @include('Scripts.script')

</body>
</html>
