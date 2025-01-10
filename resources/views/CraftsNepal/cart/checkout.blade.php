@extends('layouts.main')

@section('container')
<div class="container my-4">
    <h2 class="text-center mb-4">Checkout</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Order Summary</h4>
            <ul class="list-group mb-4">
                @foreach($cartItems as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item->product->name }} (x{{ $item->quantity }})
                        <span>Rs {{ $item->product->price * $item->quantity }}</span>
                    </li>
                @endforeach
            </ul>
            <h5 class="text-end">Total: RS{{ $total }}</h5>
        </div>
    </div>

    <form action="{{ route('order.place') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="address" class="form-label">Delivery Address</label>
            <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Place Order</button>
    </form>
</div>
@endsection
