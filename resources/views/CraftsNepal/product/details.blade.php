@extends('layouts.main')

@section('container')

<section class="product_description_section">
    {{-- <div class="heading">
        <h1>Product Details</h1>
    </div> --}}
    <div class="detail_card">
        <img src="{{ asset('uploads/' . $product->image)}}" alt="{{ $product->name }}" >

        <div class="product_details">
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->description }}</p>
            
            
            <div class="product_price">
            <strong>Price:  </strong>
            <span> Rs {{ $product->price }}</span>
            </div>

            <div class="product_stock">
            <strong>Available:</strong>
            <span>
                @if ($product->stock > 0)
                {{ $product->stock }} left
                @else
                    Out of stock
                @endif
            </span>
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

            
            @if (!Auth::user() || !$product->reviews->where('user_id', Auth::id())->count())
            <!-- Button to Open Review Modal -->
            <button class="write_review_btn" data-bs-toggle="modal" data-bs-target="#reviewModal">Write Review</button>
            @endif

        
            </div>
    
        </div>
    </div>
</section>


<!-- Reviews Section -->
<div class="mt-5">
    <h2>Customer Reviews ({{ $product->reviews->count() }})</h2>
    
    @if ($product->reviews->count() > 0)
        @foreach ($product->reviews as $review)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">
                        <img src="{{ asset('uploads/' . $review->user->image) }}" alt="Profile" class="rounded-circle" width="40" height="40">
                        <strong>{{ $review->user->first_name }}</strong>
                        <span class="text-muted" style="font-size: 14px;"> - {{ $review->created_at->format('d M Y') }}</span>
                    </h5>
                    <p>
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-secondary' }}"></i>
                        @endfor
                    </p>
                    <p class="card-text">{{ $review->comment }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-muted">No reviews yet. Be the first to review this product!</p>
    @endif
</div>

<!-- Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Left Column: Overall Rating -->
                    <div class="col-md-5 text-center border-end">
                        <h4>Overall Rating</h4>
                        <h2 class="text-warning">
                            <i class="fas fa-star"></i> {{ number_format($product->reviews->avg('rating'), 1) }}/5
                        </h2>
                        <p>Based on {{ $product->reviews->count() }} reviews</p>
                    </div>

                    <!-- Right Column: Review Form -->
                    <div class="col-md-7">
                        <h5 class="mb-3">Submit Your Review</h5>
                        <form method="POST" action="{{ route('product-reviews.store') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <!-- Star Rating Selection -->
                            <div class="mb-3">
                                <p class="mb-2">How would you rate this product?</p>
                                <div class="rate-container">
                                    <div class="rate">
                                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                        <label for="star5" title="Excellent"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                                        <label for="star4" title="Very Good"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                        <label for="star3" title="Good"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star2" class="rate" name="rating" value="2"/>
                                        <label for="star2" title="Poor"><i class="fas fa-star"></i></label>
                                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                        <label for="star1" title="Terrible"><i class="fas fa-star"></i></label>
                                    </div>
                                    <span class="rating-text"></span> 
                                </div>
                            </div>

                            <!-- Review Text Area -->
                            <div class="mb-3 review-textarea">
                                <label for="comment" class="form-label">Your Review</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>
                            
                            <button type="submit" class="btn w-100 text-uppercase d-inline-flex align-items-center justify-content-center px-4 py-2 btn-gradient" >Submit Review</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .rate-container {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .rate {
        display: flex;
        flex-direction: row-reverse;
        gap: 5px;
    }

    .rate input {
        display: none;
    }

    .rate label {
        font-size: 30px;
        color: #ccc;
        cursor: pointer;
    }

    .rate input:checked ~ label {
        color: #ffc700;
    }

    .rate label:hover,
    .rate label:hover ~ label {
        color: #deb217;
    }

    .rating-text {
        font-size: 16px;
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".rate label").hover(function () {
            let title = $(this).attr("title");
            $(".rating-text").text(title);
        }, function () {
            $(".rating-text").text("");
        });

        $(".rate input").click(function () {
            let title = $(this).next("label").attr("title");
            $(".rating-text").text(title);
        });
    });
</script>


@endsection
