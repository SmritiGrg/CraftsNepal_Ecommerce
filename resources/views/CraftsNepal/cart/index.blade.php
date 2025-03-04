@extends('layouts.main')

@section('container')
<div class="container my-5">
    <h2 class="mb-4 text-center">🛒 Shopping Cart</h2>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row">
        {{-- Cart Items Section --}}
        @php
            $grandTotal = 0; // Initialize grand total
        @endphp
        <div class="col-md-8">
            <h5 class="mb-3">ITEMS IN CART</h5>
            @if($cartItems->isEmpty())
                <div class="text-center">
                    <p>Your cart is empty!</p>
                    <a href="{{ route('userproduct.index') }}" class="btn btn-primary">Continue Shopping</a>
                    <a href="{{ route('userorder.index') }}" class="btn btn-primary">Order History</a>

                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            @php
                                $itemTotal = $item->product->price * $item->quantity; // Calculate total for each product
                                $grandTotal += $itemTotal; // Add to grand total
                            @endphp
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="{{ asset('uploads/' . $item->product->image) }}" 
                                        alt="{{ $item->product->name }}" 
                                        class="img-thumbnail me-3" 
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6>{{ $item->product->name }}</h6>
                                    </div>
                                </td>
                                
                                <td>
                                    <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-flex align-items-center">
                                        @csrf
                                        @method('PATCH')
                                    
                                        {{-- Decrease Quantity Button --}}
                                        <button type="submit" name="quantity" value="{{ $item->quantity - 1 }}" class="btn btn-light btn-sm">-</button>
                                    
                                        <input type="number" value="{{ $item->quantity }}" class="form-control text-center mx-1" style="width: 50px;" readonly>
                                    
                                        {{-- Increase Quantity Button --}}
                                        <button type="submit" name="quantity" value="{{ $item->quantity + 1 }}" class="btn btn-light btn-sm">+</button>
                                    </form>
                                </td>
                                
                                <td>Rs. {{ number_format($item->product->price, 2) }}</td>
                                <td>Rs. {{ number_format($itemTotal, 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="{{ url('/') }}" class="text-primary">
                        ← Continue Shopping
                    </a>
                    <a href="{{ route('userorder.index') }}" class="text-primary">
                        <i class="fas fa-folder"></i> Order History
                    </a>
                </div>                
            @endif
        </div>

        {{-- Order Summary Section --}}
        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="card-title mb-3">Order Summary</h5>
                <div class="d-flex justify-content-between">
                    <p>Total Item</p>
                    <p>{{ $cartItems->count() }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Total Price</p>
                    <p>{{$grandTotal}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Delivery charge</p>
                    <p>Rs 50.00</p>
                </div>
                <hr class="mt-0">
                @php
                    $totalCost = $grandTotal + 50; // Add delivery charge to grand total
                @endphp
                <div class="d-flex justify-content-between fw-bold">
                    <p>Total Cost</p>
                    <p>RS {{ number_format($totalCost, 2) }}</p>
                </div>
                <form action="{{ route('cart.checkout') }}" method="post" class="mt-2">
                    @csrf
                <div class="mb-3">
                    <label for="order_detail" class="form-label">Address</label>
                    <textarea name="order_detail" id="order_detail" class="form-control" rows="3" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-success w-100">Checkout</button>
            </div>
        </div>
    </div>
</div>
@endsection
