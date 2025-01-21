@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <div class="heading">
       
         <h1>Product Details</h1>
    </div>

    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('uploads/' . $product->image)}}" alt="{{ $product->name }}" class="img-fluid">
        </div>

        <!-- Product Details -->
        <div class="col-md-6 text-center">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">{{ $product->description }}</p>
            <h4>Price: Rs{{ $product->price }}</h4>

            <p><strong>Stock:</strong> 
                @if ($product->stock > 0)
                    {{ $product->stock }} available
                @else
                    Out of stock
                @endif
            </p>

            <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <input type="hidden" name="quantity" value="1">
                <button class="btn btn-primary" {{ $product->stock > 0 ? '' : 'disabled' }}>Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection
