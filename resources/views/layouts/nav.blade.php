<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">

    <div> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="ms-3" href="/">
                    <img src="{{ asset('assets/img/Logo_Crafts-removebg.png') }}" alt="logo" width="100"
                        height="70" class="d-inline-block align-text-top me-2">
                </a>
                
                <!-- Button to show or hide the navbar on small screens -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Icon for the toggler button -->
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar content with collapse feature for small screens -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul> 

                    <!-- Main navbar items -->
                    <ul class="navbar-nav  ml-5 mr-5">
                    
                        <li class="nav-item mt-2 active">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="{{route('userproduct.index')}}">Product</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        @auth
                            <li class="nav-item ">
                                <a class="nav-link" href="/cart">
                                    <i class="bi bi-cart fs-3"></i>
                                </a>
                            </li>
                        @endauth
    
                        {{-- search bar --}}
                        <li class="nav-item mt-3 ml-5 mr-5">
                            <form class="d-flex" action="{{ route('products.search') }}" method="GET">
                                <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search" required>
                                <button class="btn btn-outline-success" type="submit">
                                    <i class="bi bi-search"></i>
                                </button> 
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input type="search" id="form1" class="form-control border-end-0 rounded-0 search" placeholder="Search" style="outline: none; border: none;"/>
                                    </div>
                                    <button type="button" class="btn" id="search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                        @guest
                            <li class="nav-item mt-3">
                                <a class="nav-link2" href="register" id = "signup">
                                    Sign Up
                                </a>
                            </li>
                        @endguest

                        <!-- User profile and logout, visible only to authenticated users -->
                        @auth
                            <li class="nav-item mt-3">
                                <div class="dropdown d-inline-block">
                                    <button
                                        type="button"
                                        class="btn btn-secondary d-flex align-items-center justify-content-center rounded-circle"
                                        id="user-menu-button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                        style="width: 45px; height: 45px;"
                                    >
                                        <img
                                            class="rounded-circle"
                                            src="{{ asset('uploads/' . auth()->user()->image) }}"
                                            alt="user photo"
                                            style="width: 45px; height: 45px; object-fit: cover;"
                                        />
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="user-menu-button">
                                        <li class="px-3 py-2">
                                            <span class="d-block fw-bold text-dark">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                            <span class="d-block text-muted small">{{ Auth::user()->email }}</span>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="profile">Edit Profile</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    Log out
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</nav>
