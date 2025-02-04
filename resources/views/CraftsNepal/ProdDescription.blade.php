@extends('layouts.main')

@section('container')


<div class="product_description">
    <h3>Product Description Page </h3>
  
    <div class="product_card">
      <img src="asset/Images/pexels-Accessories.jpg" alt="Product Image" height="500px" width="450px">
      
      <div class="product_details">
        <h4>Pear Gold Ring</h4>
        <p>The Pear Gold Ring is a timeless symbol of elegance, designed to captivate with its stunning pear-shaped gemstone set on a sleek, high-quality 18k gold band. Its exquisite craftsmanship blends modern sophistication with classic charm, making it perfect for engagements, anniversaries, or as a statement accessory for any occasion.</p>
        
        
        <div class="product_price">
          <span>Price:</span>
          <strong>$99.99</strong>
        </div>
        
        <div class="product_actions">
          <button class="buy_now">Buy Now</button>
          <button class="add_to_cart">Add to Cart</button>
        </div>
  
      </div>
    </div>
  </div>

@endsection
    
