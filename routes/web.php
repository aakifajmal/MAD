<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('Pages.homepage'); })->name('homepage');
Route::get('/contact', function () { return view('Pages.contactus'); })->name('contact');
Route::get('/aboutus', function () { return view('Pages.aboutus'); })->name('aboutus');


Route::get('/', [ProductController::class, 'home'])->name('homepage');
Route::get('/allproducts', [ProductController::class, 'allproducts'])->name('allproducts');
Route::get('/cricket', [ProductController::class, 'cricket'])->name('cricket');
Route::get('/football', [ProductController::class, 'football'])->name('football');
Route::get('/basketball', [ProductController::class, 'basketball'])->name('basketball');
Route::get('/swimming', [ProductController::class, 'swimming'])->name('swimming');
Route::get('/athletic', [ProductController::class, 'athletic'])->name('athletics');
Route::get('/badminton', [ProductController::class, 'badminton'])->name('badminton');
Route::get('/other', [ProductController::class, 'other'])->name('other');

Route::get('/products/{id}', [ProductDetailController::class, 'index'])->name('productdetail');

// cart
Route::get('/cart', function(){return view('Pages.cart');})->name('cart');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ProductController::class, 'home'])->name('homepage');
});
