@extends('Layout.homelayout')

@section('carousel')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images\cover1.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover2.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover3.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover4.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover5.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover6.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover7.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images\cover8.png') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection

@section('content')

  <div class="container-fluid homeinfosection">
    <div class="row">
      <div class="col-6">
        <h1>Discover the Best Sports Equipment and Clothing at Ace Sports</h1>
        <h3>At Ace Sports, we offer a wide range of high-quality sports equipment and clothing to help you perform your best.</h3>
        <p>⮞ From basketballs to running shoes, we have everything you need.</p>
        <p>⮞ Stay comfortable and stylish with our athletic apparel.</p>
        <p>⮞ Get ready to elevate your game with Ace Sports.</p>
      </div>
      <div class="col-6">
        <img src="{{ asset('images\home.jpg') }}" alt="">
      </div>
    </div>
  </div>

  <!-- Cricket Section -->

  <div class="container-fluid productheader">
    <h1>CRICKET</h1>
    <div class="subheader">
      <h2>cricket</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products">
    <div class="row productsrow">

        @foreach ($cricket->slice(0, 4) as $cricket)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $cricket->id }}">
            <img src="{{url('storage/'.$cricket->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$cricket->name}}</p>
                <p>{{Number::currency($cricket->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach



    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/cricket">View Cricket Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>

  <!-- Football Section -->


  <div class="container-fluid productheader bg2">
    <h1>FOOTBALL</h1>
    <div class="subheader">
      <h2>football</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products bg2">
    <div class="row productsrow">

        @foreach ($football->slice(0, 4) as $football)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $football->id }}">
            <img src="{{url('storage/'.$football->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$football->name}}</p>
                <p>{{Number::currency($football->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/football">View Football Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>

  <!-- Basketball Section -->

  <div class="container-fluid productheader">
    <h1>BASKETBALL</h1>
    <div class="subheader">
      <h2>basketball</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products">
    <div class="row productsrow">

        @foreach ($basketball->slice(0, 4) as $basketball)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $basketball->id }}">
            <img src="{{url('storage/'.$basketball->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$basketball->name}}</p>
                <p>{{Number::currency($basketball->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/basketball">View Basketball Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>

  <!-- Athletic Section -->

  <div class="container-fluid productheader bg2">
    <h1>ATHLETICS</h1>
    <div class="subheader">
      <h2>athletics</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products bg2">
    <div class="row productsrow">

        @foreach ($athletics->slice(0, 4) as $athletics)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $athletics->id }}">
            <img src="{{url('storage/'.$athletics->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$athletics->name}}</p>
                <p>{{Number::currency($athletics->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/athletics">View Athletic Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>

  <!-- Badminton Section -->

  <div class="container-fluid productheader">
    <h1>BADMINTON</h1>
    <div class="subheader">
      <h2>badminton</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products">
    <div class="row productsrow">

        @foreach ($badminton->slice(0, 4) as $badminton)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $badminton->id }}">
            <img src="{{url('storage/'.$badminton->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$badminton->name}}</p>
                <p>{{Number::currency($badminton->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/badminton">View Badminton Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>

  <!-- Swimming Section -->

  <div class="container-fluid productheader bg2">
    <h1>SWIMMING</h1>
    <div class="subheader">
      <h2>swimming</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products bg2">
    <div class="row productsrow">

        @foreach ($swimming->slice(0, 4) as $swimming)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $swimming->id }}">
            <img src="{{url('storage/'.$swimming->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$swimming->name}}</p>
                <p>{{Number::currency($swimming->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/swimming">View Swimming Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>

  <!-- Other Sports -->

  <div class="container-fluid productheader">
    <h1>OTHER</h1>
    <div class="subheader">
      <h2>other</h2>
      <p>PRODUCTS</p>
    </div>
  </div>
  <div class="p-4 container-fluid products">
    <div class="row productsrow">

        @foreach ($other->slice(0, 4) as $other)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $other->id }}">
            <img src="{{url('storage/'.$other->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$other->name}}</p>
                <p>{{Number::currency($other->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="row buttonrow">
      <button type="button" class="btn btn-light"><a href="/other">View Other Sport Products</a></button>
      <button type="button" class="btn btn-light"><a href="/allproducts">View All Products</a></button>
    </div>
  </div>


@endsection

@section('gototop')
    <button onclick="scrollToTop()" class="btn btn-dark" style="position: fixed; bottom: 20px; right: 20px; display: flex; gap:10px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
        </svg>
      Go to Top
    </button>
@endsection
