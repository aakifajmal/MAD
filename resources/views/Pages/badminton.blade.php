@extends('Layout.badmintonlayout')


@section('heroheader')
        <h1>Gear up for Badminton</h1>
        <p>Discover our wide range of high-quality badminton equipment and apparel.</p>
@endsection

@section('productheader')
    <h1>BADMINTON</h1>
      <div class="subheader">
        <h2>badminton</h2>
        <p>PRODUCTS</p>
      </div>
@endsection

@section('content')

<!-- Filter -->

<div class="container p-2 filter">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#badmintonrackets">Badminton Rackets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#shuttlecock">Shuttlecock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#shoes">Shoes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#griptape">Grip Tape</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#strings">Strings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#nets">Nets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#badmintonApparel">Apparel</a>
      </li>
    </ul>
</div>

<div class="p-4 container-fluid products">

<!-- Badminton Rackets -->
<h2 id="badmintonrackets">Badminton Rackets</h2>
  <div class="row productsrow">

    @foreach ($rackets as $racket)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $racket->id }}">
            <img src="{{url('storage/'.$racket->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$racket->name}}</p>
                <p>{{Number::currency($racket->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Shuttlecock -->
<h2 id="shuttlecock">Shuttlecock</h2>
  <div class="row productsrow">

    @foreach ($shuttlecocks as $shuttlecock)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $shuttlecock->id }}">
            <img src="{{url('storage/'.$shuttlecock->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$shuttlecock->name}}</p>
                <p>{{Number::currency($shuttlecock->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>



<!-- Badminton Shoes -->
<h2 id="shoes">Badminton Shoes</h2>
<div class="row productsrow">

    @foreach ($shoes as $shoe)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $shoe->id }}">
            <img src="{{url('storage/'.$shoe->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$shoe->name}}</p>
                <p>{{Number::currency($shoe->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Grip Tapes -->
<h2 id="griptape">Grip Tapes</h2>
<div class="row productsrow">

    @foreach ($griptapes as $griptape)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $griptape->id }}">
            <img src="{{url('storage/'.$griptape->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$griptape->name}}</p>
                <p>{{Number::currency($griptape->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

</div>

<!-- Badminton Strings -->
<h2 id="strings">Badminton Strings</h2>
<div class="row productsrow">

    @foreach ($strings as $string)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $string->id }}">
            <img src="{{url('storage/'.$string->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$string->name}}</p>
                <p>{{Number::currency($string->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Badminton Nets -->
<h2 id="nets">Badminton Nets</h2>
<div class="row productsrow">

    @foreach ($nets as $net)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $net->id }}">
            <img src="{{url('storage/'.$net->images[0])}}" alt="">
            <div class="p-3 content">
                <p>{{$net->name}}</p>
                <p>{{Number::currency($net->price, 'LKR')}}</p>
                <button type="button" class="btn btn-dark">Buy Now</button>
            </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Badminton Apparel -->
<h2 id="badmintonApparel">Badminton Apparel</h2>
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
