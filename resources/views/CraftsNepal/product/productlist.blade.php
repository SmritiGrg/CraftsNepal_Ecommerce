@extends('layouts.main')
 @section('content')
<body>
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
        <script>
          // Get references to all checkboxes and items
          const checkboxes = document.querySelectorAll('input[name="category"]');
          const items = document.querySelectorAll('.item');
      
          // Function to filter items
          function filterItems() {
              // Get selected categories
              const selectedCategories = Array.from(checkboxes)
                  .filter(checkbox => checkbox.checked)
                  .map(checkbox => checkbox.value);
      
              // Show or hide items based on selected categories
              items.forEach(item => {
                  const itemCategory = item.getAttribute('data-category');
                  if (selectedCategories.length === 0 || selectedCategories.includes(itemCategory)) {
                      item.style.display = ''; // Show item
                  } else {
                      item.style.display = 'none'; // Hide item
                  }
              });
          }
      
          // Add event listener to all checkboxes
          checkboxes.forEach(checkbox => {
              checkbox.addEventListener('change', filterItems);
          });
      </script>
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
    

        <h1 class="text-center mb-4">Our Products</h1>
       
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
   @endsection 
   