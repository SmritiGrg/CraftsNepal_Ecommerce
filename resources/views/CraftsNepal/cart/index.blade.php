@extends('layouts.main')

@section('container')
<div class="container my-5">
    <h2 class="mb-4 text-center">🛒 Shopping Cart</h2>

    <div class="row">
        {{-- Cart Items Section --}}
        @php
            $grandTotal = 0; // Initialize grand total
        @endphp
        <div class="col-md-8">
            <h5 class="mb-3">Product Details</h5>
            @if($cartItems->isEmpty())
                <div class="text-center">
                    <p>Your cart is empty!</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a>
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
                                        <button type="submit" name="quantity" value="{{ $item->quantity - 1 }}" class="btn btn-light btn-sm">-</button>
                                        <input type="number" value="{{ $item->quantity }}" class="form-control text-center mx-1" style="width: 50px;" readonly>
                                        <button type="submit" name="quantity" value="{{ $item->quantity + 1 }}" class="btn btn-light btn-sm">+</button>
                                    </form>
                                </td>
                                <td>Rs {{ number_format($item->product->price, 2) }}</td>
                                <td>RS {{ number_format($itemTotal, 2) }}</td>
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
                <a href="{{ url('/') }}" class="text-primary">
                    ← Continue Shopping
                </a>
            @endif
        </div>

        {{-- Order Summary Section --}}
        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="card-title">Order Summary</h5>
                <div class="d-flex justify-content-between">
                    <p>Items</p>
                    <p>{{ $cartItems->count() }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Delivery charge</p>
                    <p>Rs 50.00</p>
                </div>
                <hr>
                @php
                    $totalCost = $grandTotal + 50; // Add delivery charge to grand total
                @endphp
                <div class="d-flex justify-content-between fw-bold">
                    <p>Total Cost</p>
                    <p>RS {{ number_format($totalCost, 2) }}</p>
                </div>
                <a href="{{ route('cart.checkout') }}" class="btn btn-primary w-100">Checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection
