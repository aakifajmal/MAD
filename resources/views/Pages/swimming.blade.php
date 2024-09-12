@extends('Layout.swimminglayout')


@section('heroheader')
        <h1>Gear up for Swimming</h1>
        <p>Discover our wide range of high-quality swimming equipment and apparel.</p>
@endsection

@section('productheader')
    <h1>SWIMMING</h1>
      <div class="subheader">
        <h2>swimming</h2>
        <p>PRODUCTS</p>
      </div>
@endsection

@section('content')

<!-- Filter -->

<div class="container p-2 filter">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#swimwear">Swimwear</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#goggles">Goggles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#caps">Caps</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#fins">Fins</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#kickboards">Kickboards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pullbuoys">Pull Buoys</a>
      </li>
    </ul>
</div>

<div class="p-4 container-fluid products">

<!-- Swimwear -->
<h2 id="swimwear">Swimwear</h2>
  <div class="row productsrow">

    @foreach ($swimwear as $swimwear)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $swimwear->id }}">
            <img src="{{url('storage/'.$swimwear->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$swimwear->name}}</p>
                <p>{{Number::currency($swimwear->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Swimming Goggles -->
<h2 id="goggles">Swimming Goggles</h2>
  <div class="row productsrow">

    @foreach ($goggles as $goggle)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $goggle->id }}">
            <img src="{{url('storage/'.$goggle->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$goggle->name}}</p>
                <p>{{Number::currency($goggle->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>



<!-- Swimming Caps -->
<h2 id="caps">Swimming Caps</h2>
<div class="row productsrow">

    @foreach ($caps as $cap)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $cap->id }}">
            <img src="{{url('storage/'.$cap->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$cap->name}}</p>
                <p>{{Number::currency($cap->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Swimming Fins -->
<h2 id="fins">Swimming Fins</h2>
<div class="row productsrow">

    @foreach ($fins as $fin)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $fin->id }}">
            <img src="{{url('storage/'.$fin->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$fin->name}}</p>
                <p>{{Number::currency($fin->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

</div>

<!-- Swimming Kickboards -->
<h2 id="kickboards">Swimming Kickboards</h2>
<div class="row productsrow">

    @foreach ($kickboards as $kickboard)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $kickboard->id }}">
            <img src="{{url('storage/'.$kickboard->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$kickboard->name}}</p>
                <p>{{Number::currency($kickboard->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Swimming Pull Buoys -->
<h2 id="pullbuoys">Swimming Pull Buoys</h2>
<div class="row productsrow">

    @foreach ($pullbouys as $pullbouy)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $pullbouy->id }}">
            <img src="{{url('storage/'.$pullbouy->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$pullbouy->name}}</p>
                <p>{{Number::currency($pullbouy->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

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
