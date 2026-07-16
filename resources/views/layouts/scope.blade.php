<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Restoran') }} - {{ $pageTitle ?? '' }}</title>
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

        <!-- Navbar & Section Start -->
        <div class="container-xxl position-relative p-0">

            {{-- Navbar --}}
            @include('_COMPONENTS.nav')

            {{-- Section --}}
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $currentPath ?? 'About Us' }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $currentPath ?? 'About Us' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <!-- Navbar & Section End -->

        {{-- Scope Start --}}
        @yield('scope')
        {{-- Scope End --}}

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