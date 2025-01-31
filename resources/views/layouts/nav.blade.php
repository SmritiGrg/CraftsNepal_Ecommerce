<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="class-navbar bg-light sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand d-flex align-items-center" href="/"
                    style="margin-left: 10rem; margin-right: 7rem;">
                    <img src="{{ asset('assets/img/Logo_Crafts-removebg.png') }}" alt="logo" width="100"
                        height="70" class="d-inline-block align-text-top me-2">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
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

                        <li class="nav-item mt-3 ml-5 mr-5">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </li>
                        @guest
                            <li class="nav-item mt-3">
                                <a class="nav-link2" href="register" id = "signup">
                                    Sign Up
                                </a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item
                                    dropdown mx-5">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('uploads/' . auth()->user()->image) }}" alt="Profile" class="rounded-circle" width="40" height="40">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profile">Profile</a></li>
                                    {{-- <li><a class="dropdown-item" href="/register">LogOut</a></li> --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <ul class="navbar-nav mx-auto">
                    </ul>
                </div>
            </div>

        </nav>
    </div>
</nav>
