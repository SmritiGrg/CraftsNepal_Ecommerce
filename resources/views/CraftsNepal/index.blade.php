@extends('layouts.main')
@section('container')
<div class="container py-3">
    <div class="d-flex justify-content-between align-items-center mb-4">  
      <div class="dropdown">
          <button
              class="btn btn-outline-secondary dropdown-toggle"
              type="button"
              id="filterDropdown"
              data-bs-toggle="dropdown"
              aria-expanded="false"
          >
              <i class="bi bi-funnel"></i> Filter
          </button>
          <ul class="dropdown-menu" aria-labelledby="filterDropdown">
              <li>
                  <label class="dropdown-item">
                      <input type="checkbox" name="category" value="bags" class="form-check-input me-2">
                      Bags
                  </label>
              </li>
              <li>
                  <label class="dropdown-item">
                      <input type="checkbox" name="category" value="clothing" class="form-check-input me-2">
                      Clothing
                  </label>
              </li>
              <li>
                  <label class="dropdown-item">
                      <input type="checkbox" name="category" value="decor" class="form-check-input me-2">
                      Decor
                  </label>
              </li>
              
          </ul>
      </div>
      
      <div class="dropdown">
          <button
              class="btn btn-outline-secondary dropdown-toggle"
              type="button"
              id="sortDropdown"
              data-bs-toggle="dropdown"
              aria-expanded="false"
          >
              <i class="bi bi-sort-down"></i> Sort
          </button>
          <ul class="dropdown-menu" aria-labelledby="sortDropdown">
              <li>
                  <a class="dropdown-item" href="?sort=price_asc">Price: Low to High</a>
              </li>
              <li>
                  <a class="dropdown-item" href="?sort=price_desc">Price: High to Low</a>
              </li>
              <li>
                  <a class="dropdown-item" href="?sort=rating_desc">Rating: High to Low</a>
              </li>
          </ul>
      </div>
  </div>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4 ">
         
    <div class="col">
      <div class="card product-card">
        <img src="{{asset('storage/assets/images/bag.jpg')}}" class="card-img-top" alt="Product 1">
        <div class="hover-buttons">
          <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
          <button class="btn-outline-custom">Details</button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Bag </h5>
          <p class="card-text text-muted">Rs 500</p>
          <div class="star-rating"> 
              <i class="fas fa-star"></i>
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
        <img src="{{asset('storage/assets/images/art.jpg')}}" class="card-img-top" alt="Product 2">
        <div class="hover-buttons">
          <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
          <button class="btn-outline-custom">Details</button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Rajasthani patchwork</h5>
          <p class="card-text text-muted">RS 600</p>
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
        <img src="{{asset('storage/assets/images/jacket_black.jpg')}}" class="card-img-top" alt="Product 3">
        <div class="hover-buttons">
          <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
          <button class="btn-outline-custom">Details</button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Jacket Black and white</h5>
          <p class="card-text text-muted">Rs 1000</p>
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
  </div>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
          
    <div class="col">
      <div class="card product-card">
        <img src="{{asset('storage/assets/images/jacket_green.jpg')}}" class="card-img-top" alt="Product 1">
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
        <img src="{{asset('storage/assets/images/dio.jpg')}}" class="card-img-top" alt="Product 2">
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
        <img src="{{asset('storage/assets/images/craft.jpg')}}" class="card-img-top" alt="Product 3">
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
  </div>
</div>
    {{-- ----- START PRODUCT REVIEW SECTION ----- --}}
    {{-- <section id = "reviews" class="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Customer Says</h1>
        </div>
        <div class="review-slider ">

            <div class="wrapper">
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/bag.jpg') }}" alt="product">
                            </div>
                            <div class="product-info">
                                <h3>Hemp BackPack</h3>
                                <p>Accessories</p>
                            </div>
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

                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/shawl.jpg') }}" alt="product">
                            </div>
                            <div class="product-info">
                                <h3>Pashmina Silk Mixed Shawl</h3>
                                <p>Clothing</p>
                            </div>
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
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/12-antiqued-vajrasattva-statue.jpg') }}" alt="product">
                            </div>
                            <div class="product-info">
                                <h3>Metal Satue</h3>
                                <p>Arts and Crafts</p>
                            </div>
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
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide ">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/shoe1.jpg') }}" alt="product">
                            </div>

                            <div class="product-info">
                                <h3>Felt Angle Boot</h3>
                                <p>Clothing</p>
                            </div>
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
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> --}}
    {{-- ----- END PRODUCT REVIEW SECTION ----- --}}
    <section id = "reviews" class="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Customer Says</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card product-card ">
                    {{-- <img src="{{ asset('assets/img/bag.jpg') }}" class="card-img-top" alt="Product 1"> --}}
                    <div class="card-body">
                        {{-- <div class="product-info">
                            <h3>Hemp BackPack</h3>
                            <p>Accessories</p>
                        </div> --}}
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
                    {{-- <img src="{{ asset('assets/img/bag.jpg') }}" class="card-img-top" alt="Product 1"> --}}
                    <div class="card-body">
                        {{-- <div class="product-info">
                            <h3>Hemp BackPack</h3>
                            <p>Accessories</p>
                        </div> --}}
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
                    {{-- <img src="{{ asset('assets/img/bag.jpg') }}" class="card-img-top" alt="Product 1"> --}}
                    <div class="card-body">
                        {{-- <div class="product-info">
                            <h3>Hemp BackPack</h3>
                            <p>Accessories</p>
                        </div> --}}
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
@endsection
