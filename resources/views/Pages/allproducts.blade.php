@extends('Layout.allproductslayout')

@section('productheader')
    <h1>PRODUCTS</h1>
    <div class="subheader">
    <h2>ALL PRODUCTS</h2>
    </div>
@endsection

@section('content')

        @foreach ($products as $product)

        <div class="col-lg-3">
            <div class="div">
                <a href="/products/{{ $product->id }}">
                    <img src="{{url('storage/'.$product->images[0])}}" alt="">
                    <div class="p-3 content">
                        <p>{{$product->name}}</p>
                        <p>{{Number::currency($product->price, 'LKR')}}</p>
                        <button type="button" class="btn btn-dark">Buy Now</button>
                    </div>
                </a>
            </div>
        </div>

        @endforeach

@endsection

@section('gototop')
    <button onclick="scrollToTop()" class="btn btn-dark" style="position: fixed; bottom: 20px; right: 20px; display: flex; gap:10px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
      </svg>
    Go to Top
    </button>
@endsection
