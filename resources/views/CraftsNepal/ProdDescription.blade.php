@extends('layouts.main')

@section('container')


<div class="product_description">
    <h3>Product Description Page </h3>
  
    <div class="product_card">
      <img src="{{ asset('uploads/' . $product->image)}}" alt="{{ $product->name }}" class="img-fluid">
      
      <div class="product_details">
        <h4>{{ $product->name }}</h4>
        <p>{{ $product->description }}</p>
        
        
        <div class="product_price">
          <span>Price:</span>
          <strong>Rs {{ $product->price }}</strong>
        </div>

        <div class="product_stock">
          <span>Stock:</span>
          <strong>
            @if ($product->stock > 0)
              {{ $product->stock }} available
            @else
                Out of stock
            @endif
          </strong>
        </div>

      
        <div class="product_actions">
          <form method="POST" action="{{ route('cart.add') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="hidden" name="quantity" value="1">
            <button class="add_to_cart_btn" {{ $product->stock > 0 ? '' : 'disabled' }}>Add to Cart</button>
          </form>

          <!-- Button to Open Review Modal -->
          @if (!Auth::user() || !$product->reviews->where('user_id', Auth::id())->count())
          <!-- Button to Open Review Modal -->
          <button class="write_review_btn" data-bs-toggle="modal" data-bs-target="#reviewModal">Write Review</button>
          @endif

          {{-- <button class="add_to_cart">Add to Cart</button> --}}
        </div>
  
      </div>
    </div>
  </div>

@endsection
    
