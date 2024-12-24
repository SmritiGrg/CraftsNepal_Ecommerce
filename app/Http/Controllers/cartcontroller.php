<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function index(){
        return View('cart.cart');
    }
    public function addToCart(Request $request)
    {
        $cart = Session::get('cart', []); // Retrieve cart from session or initialize an empty array
        $product = $request->only(['id', 'name', 'price']); // Get product data from the request

        // Check if the product is already in the cart
        if (!array_key_exists($product['id'], $cart)) {
            $cart[$product['id']] = $product;
            Session::put('cart', $cart); // Save updated cart to session
            return redirect()->back()->with('success', 'Product added to cart!');
        }

        return redirect()->back()->with('error', 'Product is already in the cart.');
    }
}
