@extends('Layout.athleticlayout')


@section('heroheader')
    <h1>Gear up for Athletics</h1>
    <p>Discover our wide range of high-quality athletic equipment and apparel.</p>
@endsection

@section('productheader')
    <h1>ATHLETICS</h1>
      <div class="subheader">
        <h2>athletics</h2>
        <p>PRODUCTS</p>
      </div>
@endsection

@section('content')

<!-- Filter -->

<div class="container p-2 filter">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#athleticspikes">Atheletic Spikes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#athleticApparel">Athletic Apparel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#athleticequipment">Athletic Equipment</a>
      </li>
    </ul>
</div>

<div class="p-4 container-fluid products">

<!-- Athletic Spikes -->
<h2 id="athleticspikes">Athletic Spikes</h2>
  <div class="row productsrow">

    @foreach ($spikes as $spike)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $spike->id }}">
            <img src="{{url('storage/'.$spike->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$spike->name}}</p>
                <p>{{Number::currency($spike->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Athletic Apparel -->
<h2 id="athleticApparel">Athletic Apparel</h2>
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



<!-- Athletic Equipment -->
<h2 id="athleticequipment">Athletic Equipment</h2>
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
