@extends('Layout.cartlayout')


@section('content')

    <div class="container-fluid cartcontainer p-4">
        <div class="row">
            <h1>Shopping Cart</h1>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row p-4">
                    <div class="col-md-6 col-lg-6">
                        <img src={{ asset('images/cover1.png') }} alt="">
                    </div>
                    <div class="col-md-6 col-lg-6 p-2">
                        <h3>Premiuim Black Tee</h3>
                        <p>Rs. 15,599</p>
                        <div class="div">
                            <div class="btn btn-dark">-</div>
                            <span>1</span>
                            <div class="btn btn-dark">+</div>
                            <div class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-2">
                <h1>Summary</h1>
                <div class="row">
                    <div class="col-6">
                        <p>Subtotal</p>
                    </div>
                    <div class="col-6 pricecol">
                        <p>Rs. 15,599</p>
                    </div>
                </div>
                <div class="btn btn-dark btncontpayment">Continue Payment</div>
                <div class="btn btn-outline-dark btncontshop">Continue Shopping</div>
            </div>
        </div>
    </div>

@endsection

