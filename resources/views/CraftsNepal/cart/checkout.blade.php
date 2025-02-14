@extends('layouts.main')
@section('container')
<<<<<<< HEAD
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
        <form action="{{ route('esewa.pay') }}" method="post" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-success w-100">Pay</button>
        </form>
    </div>    
=======
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
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Delivery Charged
                    <span>Rs 50</span>
                </li>
            </ul>
            <h5 class="text-end">Total: RS{{ $total }}</h5>
        </div>
    </div>
    <form action="{{ route('esewa.pay') }}" method="post" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-success w-100">Pay</button>
    </form>
    
    
>>>>>>> payment
@endsection
