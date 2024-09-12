@extends('Layout.footballlayout')


@section('heroheader')
    <h1>Gear up for Football</h1>
    <p>Discover our wide range of high-quality football equipment and apparel.</p>
@endsection

@section('productheader')
    <h1>FOOTBALL</h1>
      <div class="subheader">
        <h2>football</h2>
        <p>PRODUCTS</p>
      </div>
@endsection

@section('content')

<!-- Filter -->

<div class="container p-2 filter">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#footballboots">Football Boots</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footballs">Footballs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footballApparel">Football Apparel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footballEquipment">Football Equipment</a>
      </li>
    </ul>
</div>

<div class="p-4 container-fluid products">

<!-- Football boots -->
<h2 id="footballboots">Football Boots</h2>
  <div class="row productsrow">

    @foreach ($boots as $boot)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $boot->id }}">
            <img src="{{url('storage/'.$boot->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$boot->name}}</p>
                <p>{{Number::currency($boot->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Footballs -->
<h2 id="footballs">Footballs</h2>
  <div class="row productsrow">

    @foreach ($balls as $ball)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $ball->id }}">
            <img src="{{url('storage/'.$ball->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$ball->name}}</p>
                <p>{{Number::currency($ball->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>



<!-- Football Apparel -->
<h2 id="footballApparel">Football Apparel</h2>
<div class="row productsrow">

    @foreach ($apparel as $apparel)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $apparel->id }}">
            <img src="{{url('storage/'.$apparel->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$apparel->name}}</p>
                <p>{{Number::currency($apparel->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>



    @endforeach

  </div>

<!-- Football Equipment -->
<h2 id="footballEquipment">Football Equipment</h2>
<div class="row productsrow">

    @foreach ($equipments as $equipment)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $equipment->id }}">
            <img src="{{url('storage/'.$equipment->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$equipment->name}}</p>
                <p>{{Number::currency($equipment->price, 'LKR')}}</p>
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
