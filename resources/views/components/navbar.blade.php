<nav class="p-2 navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navlinkrow">

            <a class="navbar-brand" href="/">
                <img src="{{ asset('images\logo.png') }}" alt="" style="height: 76px;">
            </a>

            <ul class="mb-2 navbar-nav">
                <li class="nav-item">
                    <a class="{{(Route::is('homepage')) ? 'active':''}}  nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                     <a class="{{(Route::is('allproducts') || Route::is('cricket') || Route::is('football') || Route::is('basketball') || Route::is('swimming') || Route::is('athletics') || Route::is('badminton') || Route::is('other')) ? 'active':''}} nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="{{(Route::is('allproducts')) ? 'active':''}} dropdown-item" href="/allproducts">All Products</a></li>
                        <li><a class="{{(Route::is('cricket')) ? 'active':''}} dropdown-item" href="/cricket">Cricket</a></li>
                        <li><a class="{{(Route::is('football')) ? 'active':''}} dropdown-item" href="/football">Football</a></li>
                        <li><a class="{{(Route::is('basketball')) ? 'active':''}} dropdown-item" href="/basketball">Basketball</a></li>
                        <li><a class="{{(Route::is('swimming')) ? 'active':''}} dropdown-item" href="/swimming">Swimming</a></li>
                        <li><a class="{{(Route::is('athletics')) ? 'active':''}} dropdown-item" href="/athletic">Athletics</a></li>
                        <li><a class="{{(Route::is('badminton')) ? 'active':''}} dropdown-item" href="/badminton">Badminton</a></li>
                        <li><a class="{{(Route::is('other')) ? 'active':''}} dropdown-item" href="/other">Other</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="{{(Route::is('contact')) ? 'active':''}} nav-link" aria-current="page" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="{{(Route::is('aboutus')) ? 'active':''}} nav-link" aria-current="page" href="/aboutus">About Us<a>
                </li>
            </ul>

            <div class="loginbuttonrow">
                <a href="/cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </a>
                @if (Route::has('login'))
                    @auth
                        <x-app-layout>
                        </x-app-layout>
                     @else
                        <a href="{{ route('login') }}" class="loginbtn">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="registerbtn">Register</a>
                        @endif
                    @endauth
                @endif
            </div>

        </div>
    </div>
  </nav>
