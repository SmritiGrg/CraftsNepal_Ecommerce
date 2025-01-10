<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function addToCart(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:product,id',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'sometimes|integer|min:1|max:10',
        ]);
    
        $cartItem = Cart::where('user_id', auth()->id())
            ->where('product_id', $validatedData['id'])
            ->first();
     
        if ($cartItem) {
            // Update quantity if item already exists in the cart
            $cartItem->increment('quantity', $validatedData['quantity'] ?? 1);
        } else {
            // Add new item to the cart
         $cart=   Cart::create([
                'product_id' => $validatedData['id'],
                'user_id' => auth()->id(),
                'name' => $validatedData['name'],
                'price' => $validatedData['price'],
                'quantity' => $validatedData['quantity'] ?? 1,
            ]);
            //dd($cart);
        }
    
        return redirect()->back()->with('success', 'Product added to cart!');
    }
    public function cartPage()
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
    
        return view('CraftsNepal.cart.index', compact('cartItems'));
    }
    public function update(Request $request,$id){
     // Validate that the quantity is a positive integer
     $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);
    
    // Find the cart item by its ID
    $cartItem = Cart::findOrFail($id);
    
    // Ensure the authenticated user is updating their own cart
    if ($cartItem->user_id !== auth()->id()) {
        return redirect()->route('cart.page')->with('error', 'Unauthorized action.');
    }
    
    // Update the quantity
    $cartItem->update([
        'quantity' => $request->quantity,
    ]);
    
    return redirect()->route('cart.page')->with('success', 'Cart updated successfully.');
    }
    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();
    
        return redirect()->route('cart.page')->with('success', 'Item removed from cart!');
    }
    public function checkout()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
    
        $total = $cartItems->reduce(function ($carry, $item) {
            return $carry + ($item->product->price * $item->quantity);
        }, 0);
    
        return view('CraftsNepal.cart.checkout', compact('cartItems', 'total'));
    }
    
    
    public function placeOrder(Request $request)
    {
        $cartItems = Cart::where('customer_id', auth()->id())->get();
    
        $order = Order::create([
            'customer_id' => auth()->id(),
            'total' => $cartItems->sum(function ($item) {
                return $item->product->price * $item->quantity;
            }),
            'address' => $request->address,
            'status' => 'Pending',
        ]);
    
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
            ]);
        }
    
        // Clear the cart
        Cart::where('customer_id', auth()->id())->delete();
    
        return redirect()->route('cart.page')->with('success', 'Order placed successfully!');
    }
    
}
