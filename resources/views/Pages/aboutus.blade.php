@extends('Layout.aboutuslayout')

@section('content')
<div class="container py-5 aboutus">
    <div class="row">
        <div class="mb-4 col-lg-6">
            <img src="{{ asset('images/aboutus.jpeg') }}" alt="Ace Sports Store" class="rounded shadow img-fluid">
        </div>
        <div class="col-lg-6">
            <h2 class="display-4">About Ace Sports</h2>
            <p class="lead">Since 2003, Ace Sports has been your go-to destination for top-quality sports equipment and apparel. We are passionate about helping athletes of all levels achieve their goals with the best gear and clothing in the market.</p>
            <p>We specialize in a wide range of sports goods, from high-performance gear to stylish and comfortable apparel. Our commitment to quality and customer satisfaction has made us a trusted name in the sports world.</p>
            <p>At Ace Sports, we believe in the power of sports to bring people together and inspire greatness. Our team is dedicated to providing the best products and service to support your journey, whether you're a professional athlete or just getting started.</p>
        </div>
    </div>

    <div class="mt-5 row">
        <div class="text-center col">
            <h3 class="mb-4">Why Choose Ace Sports?</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="border-0 shadow-md card">
                        <div class="card-body">
                            <h5 class="card-title">Quality Products</h5>
                            <p class="card-text">We offer a wide range of premium sports equipment and apparel designed to enhance your performance and style.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border-0 shadow-lg card">
                        <div class="card-body">
                            <h5 class="card-title">Expert Support</h5>
                            <p class="card-text">Our team of experts is always ready to assist you in finding the perfect products to meet your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border-0 shadow-md card">
                        <div class="card-body">
                            <h5 class="card-title">Trusted Since 2003</h5>
                            <p class="card-text">With over two decades in the industry, we have built a reputation for excellence and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
