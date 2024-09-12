@extends('Layout.productdetaillayout')


<style>
        /* Custom styles for the product page */
        .product-img {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 400px;
            object-fit: cover;
        }
        .product-thumbnails img {
            max-height: 80px;
            margin: 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .product-thumbnails img:hover, .product-thumbnails img.active {
            border-color: #007bff;
        }
        .product-details {
            margin-top: 20px;
        }
        .add-to-cart-btn {
            margin-top: 20px;
        }
        .breadcrumb {
            background-color: transparent;
            margin-bottom: 20px;
        }
        .selection-section {
            margin-top: 20px;
        }
        .selection-section label {
            font-weight: bold;
        }
        .color-display {
            display: inline-block;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 2px solid #ddd;
            background-color: {{ $product->color }};
        }
    </style>


@section('content')

<div class="container p-4 mt-4">

    <!-- Product Details -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-4 main-image">
                <!-- Display the first image in the images array, or a default image if none exists -->
                <img id="mainImage" src="{{ isset($product->images[0]) ? url('storage/'.$product->images[0]) : 'default.jpg' }}" alt="{{ $product->name }}" class="img-fluid product-img">
            </div>
            <div class="product-thumbnails d-flex">
                @if(is_array($product->images) && count($product->images) > 0)
                    @foreach($product->images as $image)
                        <img src="{{ url('storage/'.$image) }}" alt="{{ $product->name }}" class="img-thumbnail" onclick="changeImage(this)">
                    @endforeach
                @else
                    <p>No additional images available</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 product-details [&>ul]:list-disc [&>ul]:ml-4">
            <h2>{{ $product->name }}</h2>
            <p class="text-muted">{!! Str::markdown($product->description)!!}</p>
            <p class="product-price">Price: LKR {{ $product->price }}</p>

            <!-- Color Display -->
            {{-- <div class="selection-section">
                <label>Color:</label>
                <span class="color-display"></span> <!-- Color displayed as a circle -->
            </div> --}}

            <!-- Size Selection -->
            <div class="selection-section">
                <label for="sizeSelection">Select Size:</label>
                <select id="sizeSelection" class="form-control">
                    @if(is_array($product->size))
                        @foreach($product->size as $size)
                            <option value="{{ $size }}">{{ $size }}</option>
                        @endforeach
                    @else
                        <option value="{{ $product->size }}">{{ $product->size }}</option>
                    @endif
                </select>
            </div>

            <!-- Quantity Selection -->
            <div class="selection-section">
                <label for="quantitySelection">Quantity:</label>
                <input type="number" id="quantitySelection" class="form-control" value="1" min="1" max="10">
            </div>

            {{-- <button class="btn btn-dark add-to-cart-btn">Add to Cart</button> --}}
            {{-- add to cart button eith function called from the controller --}}
            <form action="{{ route('addToCart', ['id' => $product->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark add-to-cart-btn">Add to Cart</button>
            </form>

        </div>
    </div>
</div>
z
@endsection


<script>
    // Function to change the main image when a thumbnail is clicked
    function changeImage(element) {
        document.getElementById('mainImage').src = element.src;
        var thumbnails = document.querySelectorAll('.product-thumbnails img');
        thumbnails.forEach(img => img.classList.remove('active'));
        element.classList.add('active');
    }

</script>

