@extends('layouts.main')
@section('container')

    
<div class="section_category">
    <h3>Shop By Category</h3>
  
    <div class="cards">
  
      <div class="card">
        <img src="asset/Images/pexels-clothing.jpg" alt="" height=400px width=350px>
        <p>Clothing</p>
      </div>
  
      <div class="card">
        <img src="asset/Images/pexels-Accessories.jpg" alt="" height=400px width=350px>
        <p>Accesories</p>
      </div>
  
      <div class="card">
        <img src="asset/Images/pexels-Art.jpg" alt="" height=400px width=350px>
        <p>Art & Craft</p>
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
