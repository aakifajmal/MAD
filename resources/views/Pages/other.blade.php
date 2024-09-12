@extends('Layout.otherlayout')

@section('productheader')
    <h1>OTHER</h1>
      <div class="subheader">
        <h2>other</h2>
        <p>PRODUCTS</p>
      </div>
@endsection

@section('content')

<!-- Filter -->

<div class="container p-2 filter">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#mma">MMA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#boxing">Boxing</a>
      </li>
    </ul>
</div>

<div class="p-4 container-fluid products">

{{-- MMA --}}
<h2 id="mma">MMA</h2>
<div class="row productsrow">

    @foreach ($mma as $mma)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $mma->id }}">
            <img src="{{url('storage/'.$mma->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$mma->name}}</p>
                <p>{{Number::currency($mma->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </div>
        </div>

    @endforeach

</div>

{{-- Boxing --}}
<h2 id="boxing">Boxing</h2>
  <div class="row productsrow">

    @foreach ($boxing as $boxing)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $boxing->id }}">
            <img src="{{url('storage/'.$boxing->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$boxing->name}}</p>
                <p>{{Number::currency($boxing->price, 'LKR')}}</p>
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
