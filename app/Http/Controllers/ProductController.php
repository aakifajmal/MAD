<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function home(){
        $cricket = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket');
        })->get();
        $football = Product::whereHas('category', function ($query) {
            $query->where('name', 'football');
        })->get();
        // basketball, athletics, badminton, swimming
        $basketball = Product::whereHas('category', function ($query) {
            $query->where('name', 'basketball');
        })->get();
        $athletics = Product::whereHas('category', function ($query) {
            $query->where('name', 'athletic');
        })->get();
        $badminton = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton');
        })->get();
        $swimming = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming');
        })->get();
        $other = Product::whereHas('category', function ($query) {
            $query->where('name', 'other');
        })->get();
        return view('Pages.homepage', ['cricket' => $cricket, 'football' => $football, 'basketball' => $basketball, 'athletics' => $athletics, 'badminton' => $badminton, 'swimming' => $swimming, 'other' => $other]);
    }

    public function allproducts()
    {
        $products = Product::all();
        return view('Pages.allproducts', ['products' => $products]);
    }

    public function cricket()
    {
        $shoes = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                  ->where('subcategory', 'Shoes');
        })->get();

        $bats = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                ->where('subcategory', 'bats');
        })->get();

        $balls = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                ->where('subcategory', 'balls');
        })->get();

        $apparel = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                ->where('subcategory', 'apparel');
        })->get();

        $helmets = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                ->where('subcategory', 'helmets');
        })->get();

        $pads = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                ->where('subcategory', 'pads');
        })->get();

        $gloves = Product::whereHas('category', function ($query) {
            $query->where('name', 'cricket')
                ->where('subcategory', 'gloves');
        })->get();

        return view('Pages.cricket', ['bats' => $bats, 'balls' => $balls, 'apparel' => $apparel, 'helmets' => $helmets, 'pads' => $pads, 'gloves' => $gloves, 'shoes' => $shoes]);
    }

    public function football()
    {

        $boots = Product::whereHas('category', function ($query) {
            $query->where('name', 'football')
                ->where('subcategory', 'boots');
        })->get();

        $balls = Product::whereHas('category', function ($query) {
            $query->where('name', 'football')
                ->where('subcategory', 'balls');
        })->get();

        $apparel = Product::whereHas('category', function ($query) {
            $query->where('name', 'football')
                ->where('subcategory', 'apparel');
        })->get();

        $equipments = Product::whereHas('category', function ($query) {
            $query->where('name', 'football')
                ->where('subcategory', 'equipment');
        })->get();

        return view('Pages.football', ['boots' => $boots, 'balls' => $balls, 'apparel' => $apparel, 'equipments' => $equipments]);
    }

    public function basketball()
    {

        $balls = Product::whereHas('category', function ($query) {
            $query->where('name', 'basketball')
                ->where('subcategory', 'balls');
        })->get();

        $apparel = Product::whereHas('category', function ($query) {
            $query->where('name', 'basketball')
                ->where('subcategory', 'apparel');
        })->get();

        $equipments = Product::whereHas('category', function ($query) {
            $query->where('name', 'basketball')
                ->where('subcategory', 'equipment');
        })->get();

        $shoes = Product::whereHas('category', function ($query) {
            $query->where('name', 'basketball')
                ->where('subcategory', 'shoes');
        })->get();

        return view('Pages.basketball', ['balls' => $balls, 'apparel' => $apparel, 'equipments' => $equipments, 'shoes' => $shoes]);
    }

    public function swimming()
    {
        $swimwear = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming')
                ->where('subcategory', 'swimwear');
        })->get();

        $goggles = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming')
                ->where('subcategory', 'goggles');
        })->get();

        $caps = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming')
                ->where('subcategory', 'caps');
        })->get();

        $fins = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming')
                ->where('subcategory', 'fins');
        })->get();

        $kickboards = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming')
                ->where('subcategory', 'kickboards');
        })->get();

        $pullbouys = Product::whereHas('category', function ($query) {
            $query->where('name', 'swimming')
                ->where('subcategory', 'pullbouys');
        })->get();
        return view('Pages.swimming', ['swimwear' => $swimwear, 'goggles' => $goggles, 'caps' => $caps, 'fins' => $fins, 'kickboards' => $kickboards, 'pullbouys' => $pullbouys]);
    }

    public function athletic()
    {
        $spikes = Product::whereHas('category', function ($query) {
            $query->where('name', 'athletic')
                ->where('subcategory', 'spikes');
        })->get();

        $apparel = Product::whereHas('category', function ($query) {
            $query->where('name', 'athletic')
                ->where('subcategory', 'apparel');
        })->get();

        $equipments = Product::whereHas('category', function ($query) {
            $query->where('name', 'athletic')
                ->where('subcategory', 'equipment');
        })->get();

        return view('Pages.athletic', ['spikes' => $spikes, 'apparel' => $apparel, 'equipments' => $equipments]);
    }

    public function badminton()
    {
        $rackets = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'rackets');
        })->get();

        $shuttlecocks = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'shuttlecock');
        })->get();

        $shoes = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'shoes');
        })->get();

        $griptapes = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'griptape');
        })->get();

        $strings = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'string');
        })->get();

        $nets = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'nets');
        })->get();

        $apparel = Product::whereHas('category', function ($query) {
            $query->where('name', 'badminton')
                ->where('subcategory', 'apparel');
        })->get();

        return view('Pages.badminton', ['rackets' => $rackets, 'shuttlecocks' => $shuttlecocks, 'shoes' => $shoes, 'griptapes' => $griptapes, 'strings' => $strings, 'nets' => $nets, 'apparel' => $apparel]);
    }

    public function other()
    {
        $mma = Product::whereHas('category', function ($query) {
            $query->where('name', 'other')
            ->where('subcategory', 'mma');
        })->get();

        $boxing = Product::whereHas('category', function ($query) {
            $query->where('name', 'other')
            ->where('subcategory', 'boxing');
        })->get();
        return view('Pages.other', ['mma' => $mma, 'boxing' => $boxing]);
    }

    // public function add_to_cart(Request $request, $id)
    // {
    // if (Auth::check()) {

    //     $user=Auth::user();

    //     $product=product::find($id);

    //     $cart=new cart;

    //     $cart->name=$user->name;

    //     $cart->email=$user->email;

    //     $cart->phone=$user->phone;

    //     $cart->address=$user->address;

    //     $cart->Customer_id=$user->id;

    //     $cart->Product_title=$product->title;

    //     if($product->discount!=null)
    //     {
    //         $cart->price=$product->discount * $request->quantity;
    //     }
    //     else
    //     {
    //         $cart->price=$product->price * $request->quantity;
    //     }



    //     $cart->image=$product->image;

    //     $cart->Product_id=$product->id;

    //     $cart->quantity=$request->quantity;

    //     $cart->save();

    //     return redirect()->back();



    // }
    // else
    // {
    //     return redirect('login');
    // }
    // }

    // public function display_cart()
    // {
    //     if(Auth::id())
    //     {
    //         $id=Auth::user()->id;
    //         $cart=cart::where('Customer_id','=',$id)->get();
    //         return view('home.display_cart', compact('cart'));
    //     }

    //     else
    //     {
    //         return redirect ('login');
    //     }

    // }
}
