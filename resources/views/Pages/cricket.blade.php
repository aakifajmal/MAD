@extends('Layout.cricketlayout')


@section('heroheader')
        <h1>Gear up for Cricket</h1>
        <p>Discover our wide range of high-quality cricket equipment and apparel.</p>
@endsection

@section('productheader')
    <h1>CRICKET</h1>
      <div class="subheader">
        <h2>cricket</h2>
        <p>PRODUCTS</p>
      </div>
@endsection

@section('content')

<!-- Filter -->

<div class="container p-2 filter">
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="#cricketbats">Cricket Bats</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cricketballs">Cricket Balls</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cricketApparel">Cricket Apparel</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#crickethelmets">Cricket Helmets</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cricketpads">Cricket Pads</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cricketgloves">Cricket Gloves</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#cricketshoes">Cricket Shoes</a>
    </li>
  </ul>
</div>

<div class="p-4 container-fluid products">

  <!-- Cricket Bats -->
  <h2 id="cricketbats">Cricket Bats</h2>
  <div class="row productsrow">

    @foreach ($bats as $bat)

        <div class="col-lg-3">
            <div class="div">
                <a href="/products/{{ $bat->id }}">
                    <img src="{{url('storage/'.$bat->images[0])}}" alt="">
                    <div class="p-3 content">
                        <p>{{$bat->name}}</p>
                        <p>{{Number::currency($bat->price, 'LKR')}}</p>
                        <button type="button" class="btn btn-dark">Buy Now</button>
                    </div>
                </a>
            </div>
        </div>

    @endforeach

  </div>

  <!-- Cricket Balls -->
  <h2 id="cricketballs">Cricket Balls</h2>
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



<!-- Cricket Apparel -->
<h2 id="cricketApparel">Cricket Apparel</h2>
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

<!-- Cricket Helmets -->
<h2 id="crickethelmets">Cricket Helmets</h2>
<div class="row productsrow">

    @foreach ($helmets as $helmet)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $helmet->id }}">
                <img src="{{url('storage/'.$helmet->images[0])}}" alt="">
                <div class="p-3 content">
                    <p>{{$helmet->name}}</p>
                    <p>{{Number::currency($helmet->price, 'LKR')}}</p>
                    <button type="button" class="btn btn-dark">Buy Now</button>
                </div>
            </a>
            </div>
        </div>

    @endforeach

</div>

<!-- Cricket Pads -->
<h2 id="cricketpads">Cricket Pads</h2>
<div class="row productsrow">

    @foreach ($pads as $pad)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $pad->id }}">
                <img src="{{url('storage/'.$pad->images[0])}}" alt="">
                <div class="p-3 content">
                    <p>{{$pad->name}}</p>
                    <p>{{Number::currency($pad->price, 'LKR')}}</p>
                    <button type="button" class="btn btn-dark">Buy Now</button>
                </div>
            </a>
            </div>
        </div>

    @endforeach

  </div>

<!-- Cricket Gloves -->
<h2 id="cricketgloves">Cricket Gloves</h2>
<div class="row productsrow">

    @foreach ($gloves as $glove)

        <div class="col-lg-3">
            <div class="div">
            <a href="/products/{{ $glove->id }}">
                <img src="{{url('storage/'.$glove->images[0])}}" alt="">
                <div class="p-3 content">
                    <p>{{$glove->name}}</p>
                    <p>{{Number::currency($glove->price, 'LKR')}}</p>
                    <button type="button" class="btn btn-dark">Buy Now</button>
                </div>
            </a>
            </div>
        </div>



    @endforeach

  </div>

<!-- Cricket Shoes -->
<h2 id="cricketshoes">Cricket Shoes</h2>
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
