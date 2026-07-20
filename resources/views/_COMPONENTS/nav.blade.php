<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">

    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0">
            <i class="fa fa-utensils me-3"></i>
            {{ config('app.name', 'Restoran') }}
        </h1>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto align-items-lg-center">

            <a href="{{ route('home') }}" 
               class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>

            <a href="{{ route('menu') }}" 
               class="nav-item nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">
                Menu
            </a>

            <a href="{{ route('service') }}" 
               class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                Services
            </a>


            <div class="nav-item dropdown">

                <a class="nav-link dropdown-toggle {{ request()->routeIs(['about','team','testimonial','contact']) ? 'active' : '' }}"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown">
                    More
                </a>

                <div class="dropdown-menu dropdown-menu-end shadow rounded-3">

                    <a href="{{ route('about') }}" class="dropdown-item">
                        <i class="fas fa-info-circle me-2 text-primary"></i>
                        About Us
                    </a>

                    <a href="{{ route('team') }}" class="dropdown-item">
                        <i class="fas fa-users me-2 text-primary"></i>
                        Our Team
                    </a>

                    <a href="{{ route('testimonial') }}" class="dropdown-item">
                        <i class="fas fa-star me-2 text-primary"></i>
                        Testimonials
                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="{{ route('contact') }}" class="dropdown-item">
                        <i class="fas fa-envelope me-2 text-primary"></i>
                        Contact
                    </a>

                </div>
            </div>

            @auth
                <a href="{{ route('logout') }}" class="nav-link ms-lg-3">
                    Logout
                </a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="nav-link ms-lg-3 {{ request()->routeIs('login') ? 'active' : '' }}">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="btn btn-primary rounded-pill px-4 py-2 ms-lg-3 mt-2 mt-lg-0 {{ request()->routeIs('register') ? 'active' : '' }}">
                Register
            </a>
            @endguest

            <a href="{{ route('cart') }}" class="nav-link ms-lg-3">
                <i class="fas fa-shopping-cart fa-lg"></i>
            </a>

        </div>
    </div>
</nav>