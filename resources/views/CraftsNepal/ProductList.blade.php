@extends('layouts.main')
@section('container')
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">

            {{-- Filtering --}}
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filter
                </button>
                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                    <li><a class="dropdown-item" href="?category=Clothing">Clothing</a></li>
                    <li><a class="dropdown-item" href="?category=Art and Craft">Art & Craft</a></li>
                    <li><a class="dropdown-item" href="?category=Accessories">Accessories</a></li>
                </ul>
            </div> 

            {{-- <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filter
                </button>
                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                    @foreach (App\Models\ProductCategory::all() as $category)
                        <li>
                            <a class="dropdown-item" href="?category={{ $category->title }}">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div> --}}
            

            {{-- Sorting --}}
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sort-down"></i> Sort
                </button>
                <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                    <li><a class="dropdown-item" href="?sort=price_asc">Price: Low to High</a></li>
                    <li><a class="dropdown-item" href="?sort=price_desc">Price: High to Low</a></li>
                </ul>
            </div>

        </div>

        {{-- Product Cards --}}
        <h1 class="text-center mb-4">Our Products</h1>
        <div class="row ">
            @forelse ($products as $product)
                <div class="col-md-6 col-lg-4  col-sm-1 g-4 mb-4">
                    <div class="card product-card">
                        <img src="{{ asset('uploads/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="hover-buttons">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                            </form>
                            <a href="{{ route('userproduct.show', $product->id) }}" class="btn-outline-custom">Details</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <span class="text-warning">
                                @php
                                    $averageRating = number_format($product->reviews->avg('rating'), 1, '.', '');
                                @endphp
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                @endfor
                                ({{ $averageRating }})
                            </span>
                            <p class="card-text text-muted">Rs. {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No products found.</p>
            @endforelse
        </div>
    </div> 
    </div>
@endsection
