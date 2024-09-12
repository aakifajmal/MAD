<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement{
    // add item to cart
    static public function addItemToCart($product_id){
        $cartItems = self::getCartItemsFromCookie();

        $existingItem = null;

        foreach($cartItems as $key => $item){
            if($item['product_id'] == $product_id){
                $existingItem = $key;
                break;
            }
        }

        if($existingItem !== null){
            $cartItems[$existingItem]['quantity']++;
            $cartItems[$existingItem]['total_amount'] = $cartItems[$existingItem]['quantity'] * $cartItems[$existingItem]['unit_amount'];
        } else{
            $product = Product::where('id', $product_id)->first(['id', 'name', 'price','size','color', 'images']);
            if($product){
                $cartItems[] = [
                    'product_id' => $product_id,
                    'name' => $product->name,
                    'size' => $product->size,
                    'color' => $product->color,
                    'image' => $product->images[0],
                    'quantity' => 1,
                    'unit_amount' => $product->price,
                    'total_amount' => $product->price
                ];
            }
        }

        self::addCartItemsToCookie($cartItems);
        return count($cartItems);
    }

    // remove item from cart
    static public function removeItemFromCart($product_id){
        $cartItems = self::getCartItemsFromCookie();

        $existingItem = null;

        foreach($cartItems as $key => $item){
            if($item['product_id'] == $product_id){
                unset($cartItems[$key]);
            }
        }

        self::addCartItemsToCookie($cartItems);

        return $cartItems;
    }

    // add item to cookie
    static public function addCartItemsToCookie($cartItems){
        // saves for 30days
        Cookie::queue('cartItems', json_encode($cartItems), 60*24*30);
    }

    // clean cart items from cookie
    static public function cleanCartItemsFromCookie(){
        Cookie::queue(Cookie::forget('cartItems'));
    }

    // get all cart items from cookie
    static public function getCartItemsFromCookie(){
        $cartItems = json_decode(Cookie::get('cartItems'), true);
        if(!$cartItems){
            $cartItems = [];
        }
        return $cartItems;
    }

    // increment item quantity
    static public function incrementItemQuantity($product_id){
        $cartItems = self::getCartItemsFromCookie();

        foreach($cartItems as $key => $item){
            if($item['product_id'] == $product_id){
                $cartItems[$key]['quantity']++;
                $cartItems[$key]['total_amount'] = $cartItems[$key]['quantity'] * $cartItems[$key]['unit_amount'];
            }
        }

        self::addCartItemsToCookie($cartItems);
        return $cartItems;
    }

    // decrement item quantity
    static public function decrementItemQuantity($product_id){
        $cartItems = self::getCartItemsFromCookie();

        foreach($cartItems as $key => $item){
            if($item['product_id'] == $product_id){
                if($cartItems[$key]['quantity'] > 1){
                    $cartItems[$key]['quantity']--;
                    $cartItems[$key]['total_amount'] = $cartItems[$key]['quantity'] * $cartItems[$key]['unit_amount'];
                }
                if($cartItems[$key]['quantity'] == 0){
                    unset($cartItems[$key]);
                }
            }
        }

        self::addCartItemsToCookie($cartItems);
        return $cartItems;
    }

    // calculate grand total
    static public function calculateGrandTotal($items){
        return array_sum(array_column($items, 'total_amount'));
    }

    // update size and color
    static public function updateSizeAndColor($product_id, $size, $color){
        $cartItems = self::getCartItemsFromCookie();

        foreach($cartItems as $key => $item){
            if($item['product_id'] == $product_id){
                $cartItems[$key]['size'] = $size;
                $cartItems[$key]['color'] = $color;
            }
        }

        self::addCartItemsToCookie($cartItems);
        return $cartItems;
    }

}
