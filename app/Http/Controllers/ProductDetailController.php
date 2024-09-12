<?php

namespace App\Http\Controllers;

use App\Helpers\CartManagement;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the product by ID
        $product = Product::where('id', $request->id)->firstOrFail();

        // Pass product data to the view
        return view('Pages.productdetail', ['product' => $product]);
    }

    public function addToCart($product_id){
        $total_count = CartManagement::addItemToCart($product_id);
    }
}
