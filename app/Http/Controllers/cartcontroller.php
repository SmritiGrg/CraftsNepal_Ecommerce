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
        Cart::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->id(), 
            'quantity' => $request->quantity,
        ]);
    
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
}
