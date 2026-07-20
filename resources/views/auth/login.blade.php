<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - {{ config('app.name', 'Restoran') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('utils.head-links')
</head>
<body>
    <div class="container-xxl bg-white p-0">
        @include('_COMPONENTS.nav')

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                            <div class="card-body p-5 bg-white">
                                <div class="text-center mb-4">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width:70px;height:70px;background:linear-gradient(135deg,#FEA116,#F6F1E9);">
                                        <i class="fas fa-lock text-white fa-2x"></i>
                                    </div>
                                    <h2 class="fw-bold mb-2 text-dark">Welcome Back</h2>
                                    <p class="text-muted mb-0">Sign in to continue your delicious journey.</p>
                                </div>

                                <form method="POST" action="{{ route('login.submit') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Email Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg rounded-3 @error('email') is-invalid @enderror" placeholder="you@example.com" required>
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold">Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg rounded-3 @error('email') is-invalid @enderror" placeholder="Enter your password" required>
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-semibold">Login</button>
                                </form>

                                <div class="text-center mt-4">
                                    <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="text-primary fw-semibold">Create one</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('_COMPONENTS.footer')
    </div>

    @include('utils.scripts')
</body>
</html>
