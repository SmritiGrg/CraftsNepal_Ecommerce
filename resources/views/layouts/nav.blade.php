
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
                            {{-- <li class="nav-item ">
                                <a class="nav-link" href="{{route('userorder.index')}}">
                                    <i class="bi bi-cart fs-3"></i>
                                </a>
                            </li> --}}
                        @endauth
    
                        {{-- search bar --}}
                        <li class="nav-item mt-3 ml-5 mr-5">
                            <form class="d-flex" action="{{ route('products.search') }}" method="GET">
                                <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search" required>
                                <button class="btn btn-outline-success" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
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
                        <li class="nav-item dropdown">
                            <!-- Profile image with dropdown menu -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('uploads/' . auth()->user()->image) }}" alt="Profile"
                                    class="rounded-circle" width="40" height="40">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile">Profile</a></li> <!-- Profile link -->
                                <!-- Logout form -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                     <!-- Logout button -->
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ 'Log Out' }}
                                    </x-dropdown-link>
                                </form>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</nav>
