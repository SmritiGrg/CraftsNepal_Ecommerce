@extends('layouts.main')
@section('container')
    <div class="image-slider">
        <img src="{{ asset('assets/img/side.jpg') }}" id="slide">
        {{-- <div class="text1">Authentic Nepalese Handicrafts </div> --}}
        {{-- <div class="text2">Where Tradition Meets Modern Design</div> --}}
    </div>
    {{-- <a href="{{ route('product-reviews.create', ['productId' => $product->id]) }}">Write Review</a> --}}
    <div class="section_category">
        <h3>Shop By Category</h3>

        <div class="cards">

            <div class="card">
                <img src="{{ asset('assets/img/pexels-clothing.jpg') }}" alt="" height=400px width=350px>
                <p>Clothing</p>
            </div>

            <div class="card">
                <img src="{{ asset('assets/img/pexels-Accessories.jpg') }}" alt="" height=400px width=350px>
                <p>Accesories</p>
            </div>

            <div class="card">
                <img src="{{ asset('assets/img/pexels-Art.jpg') }} " alt="" height=400px width=350px>
                <p>Art & Craft</p>
            </div>

        </div>
    </div>

    <div class="container py-3">
        <div class="heading">
            <span>Products</span>
            <h1>Our Best Products</h1>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card product-card">
                        <img src="{{ asset('uploads/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="hover-buttons">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                            </form>
                            <a href="{{ route('userproduct.show',  $product->id) }}" class="btn-outline-custom">Details</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-muted">Rs {{ $product->price }}</p>
                            <div class="star-rating">
                                {{-- @for ($i = 1; $i <= 5; $i++)
                                    <i class="{{ $i <= $product->rating ? 'fas' : 'far' }} fa-star"></i>
                                @endfor --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">

            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset('assets/img/jacket_green.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="hover-buttons">
                        <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                        <button class="btn-outline-custom">Details</button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">jacket with green and Black</h5>
                        <p class="card-text text-muted">Rs 500</p>
                        <div class="star-rating">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset('assets/img/dio.jpg') }}" class="card-img-top" alt="Product 2">
                    <div class="hover-buttons">
                        <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                        <button class="btn-outline-custom">Details</button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">clay lamps (diyas)</h5>
                        <p class="card-text text-muted">Rs 20</p>
                        <div class="star-rating">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset('assets/img/craft.jpg') }}" class="card-img-top" alt="Product 3">
                    <div class="hover-buttons">
                        <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                        <button class="btn-outline-custom">Details</button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">pottery-making</h5>
                        <p class="card-text text-muted">Rs 100</p>
                        <div class="star-rating">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- ----- START PRODUCT REVIEW SECTION ----- --}}
    <section id = "reviews" class="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Customer Says</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card product-card ">
                    <div class="card-body">
                        <div class="reviewer">
                            <div class="profile-img">
                                <img src="{{ asset('assets/img/salman-khan.jpg') }}" alt="">
                            </div>
                            <div class="profile-info">
                                <strong>Salman Khan</strong>
                                <p>2024-11-09</p>
                            </div>
                        </div>
                        <div class="content">
                            <div>
                                <p style="text-align: center"><i class="fa-solid fa-quote-left"
                                        style="padding-right: 9px; font-size: 25px; color:#006BFF"></i>Lorem
                                    ipsum
                                    dolor sit amet consectetur adipisicing
                                    elit. Harum doloribus
                                    quibusdam
                                    soluta
                                    sapiente deleniti quam unde!<i class="fa-solid fa-quote-right"
                                        style="padding-left: 9px; font-size: 25px; color:#006BFF"></i>
                                </p>
                            </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card product-card ">
                    <div class="card-body">
                        <div class="reviewer">
                            <div class="profile-img">
                                <img src="{{ asset('assets/img/salman-khan.jpg') }}" alt="">
                            </div>
                            <div class="profile-info">
                                <strong>Salman Khan</strong>
                                <p>2024-11-09</p>
                            </div>
                        </div>
                        <div class="content">
                            <div>
                                <p style="text-align: center"><i class="fa-solid fa-quote-left"
                                        style="padding-right: 9px; font-size: 25px; color:#006BFF"></i>Lorem
                                    ipsum
                                    dolor sit amet consectetur adipisicing
                                    elit. Harum doloribus
                                    quibusdam
                                    soluta
                                    sapiente deleniti quam unde!<i class="fa-solid fa-quote-right"
                                        style="padding-left: 9px; font-size: 25px; color:#006BFF"></i>
                                </p>
                            </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card product-card ">
                    <div class="card-body">
                        <div class="reviewer">
                            <div class="profile-img">
                                <img src="{{ asset('assets/img/salman-khan.jpg') }}" alt="">
                            </div>
                            <div class="profile-info">
                                <strong>Salman Khan</strong>
                                <p>2024-11-09</p>
                            </div>
                        </div>
                        <div class="content">
                            <div>
                                <p style="text-align: center"><i class="fa-solid fa-quote-left"
                                        style="padding-right: 9px; font-size: 25px; color:#006BFF"></i>Lorem
                                    ipsum
                                    dolor sit amet consectetur adipisicing
                                    elit. Harum doloribus
                                    quibusdam
                                    soluta
                                    sapiente deleniti quam unde!<i class="fa-solid fa-quote-right"
                                        style="padding-left: 9px; font-size: 25px; color:#006BFF"></i>
                                </p>
                            </div>
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ----- END PRODUCT REVIEW SECTION ----- --}}

    <script>
        var img = [
            "{{ asset('assets/img/Clothing-1.jpg') }}",
            "{{ asset('assets/img/threadcarousel.jpg') }}",
            "{{ asset('assets/img/slider-img-2.jpg') }}",
            "{{ asset('assets/img/slider-img-3.jpg') }}",
            "{{ asset('assets/img/scarf_carousel.jpg') }}",
            "{{ asset('assets/img/pexels-clothing.jpg') }}"
        ];


        var i = 0;

        function slides() {
            document.getElementById('slide').src = img[i];
            if (i < img.length - 1)
                i++;
            else
                i = 0;
        }
        setInterval(slides, 3000);
    </script>
@endsection
