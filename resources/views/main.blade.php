<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Restoran') }} - Welcome to Our Restaurant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    {{-- Head Links --}}
    @include('utils.head-links')
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

            {{-- Navbar --}}
            @include('_COMPONENTS.nav')

            {{-- Hero Section --}}
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">

                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">
                                Fresh Food<br>Delivered To You
                            </h1>

                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                Order your favorite meals online and enjoy delicious dishes
                                prepared with fresh ingredients. Choose from our menu and
                                get your food delivered quickly and easily.
                            </p>

                            <a href="{{ route('menu') }}" 
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">
                                Order Now
                            </a>
                        </div>

                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="Delicious food">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        @include('_COMPONENTS.service')
        <!-- Service End -->

        <!-- About Start -->
        @include('_COMPONENTS.about')
        <!-- About End -->

        <!-- Menu Start -->
        @include('_COMPONENTS.menu')
        <!-- Menu End -->

        <!-- Team Start -->
        @include('_COMPONENTS.team')
        <!-- Team End -->

        <!-- Testimonial Start -->
        @include('_COMPONENTS.testimonial')
        <!-- Testimonial End -->

        <!-- Footer Start -->
        @include('_COMPONENTS.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>

    </div>

    <!-- Scripts -->
    @include('utils.scripts')

</body>

</html>