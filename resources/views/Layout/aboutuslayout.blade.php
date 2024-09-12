<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @include('Libraries.style')
</head>
<body>

    {{-- Navbar --}}
    @include('Components.navbar')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('Components.footer')

    {{-- Scripts --}}
    @include('Scripts.script')

</body>
</html>
