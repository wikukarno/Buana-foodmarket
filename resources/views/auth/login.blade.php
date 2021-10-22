@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')

<section class="section-login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <div class="figure">
                        <img src="/frontend/images/logo/Logo.png" class="figure-img img-fluid" alt="">
                        <h1>Buana Food Market</h1>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-5 text-center">
                    <h2>Welcome Back!</h2>
                    <p>Silahkan masuk untuk menjelajahi makanan dan minuman favorit anda</p>
                </div>
            </div>
            <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3 d-flex justify-content-center">
                    <div class="col-12 col-lg-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3 d-flex justify-content-center">
                    <div class="col-12 col-lg-6">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror    
                    </div>
                </div>
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-12 col-lg-3 mb-3">
                        <div class="d-grid">
                            <a href="{{ '/auth/redirect' }}" class="btn btn-google"><img src="/frontend/images/ic_google.svg" alt="">
                                <span>Login
                                    with google</span></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 mb-3">
                        <div class="d-grid">
                            <button type="submit" class="btn text-white btn-daftar">Login Now</button>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12 col-lg-12">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                        @endif
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-sm-3">
                    <div class="col-12 col-lg-6 text-center already-account">
                        <hr>
                        <span>Don't have an account? <a href="{{ route('register') }}">Sign
                                Up</a></span>
                    </div>
                </div>
            </form>
        </div>
    </section>







{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a href="{{ '/auth/redirect' }}" class="btn btn-primary">
                                    {{ __('Login with google') }}
                                </a>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
