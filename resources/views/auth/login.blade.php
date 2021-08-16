@extends('layouts.app')

@section('title')
Login
@endsection
@section('content')
<main class="d-flex align-items-center justify-content-center" style="background-color: #f1f1f1">
    <div class="d-flex flex-column align-items-center login-card">
        <div>
            <img src="/media/logos/logo-3.svg" />
        </div>

        <div class="align-items-center justify-content-center mt-5" style="width: 80%">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-column align-items-center input-card">
                    <div class="d-flex flex-column align-items-center form-group">
                        <div class="d-flex flex-row align-items-center justify-content-between input-container">
                            <div class="input-icon"><i class="fas fa-user"></i></div>
                            <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            {{-- @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between input-container mt-4">
                            <div class="input-icon"><i class="fas fa-key"></i></div>
                            <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-end mt-1 forget-password-container">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    @error('email')
                        <div class="d-flex flex-row align-items-center justify-content-center error-container my-1 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('password')
                        <div class="d-flex flex-row align-items-center justify-content-center error-container my-1 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="d-flex flex-row align-items-center justify-content-between remenber-me-container my-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" style="width: 90px; height: 40px">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    @if (Route::has('register'))
                    <div class="d-flex flex-row align-items-center justify-content-center register-link-container mt-3">
                        <p class=""> Don't have an account? 
                            <a class="btn-link" href="{{ route('register') }}">create account</a>
                        </p>
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
    

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
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
</main>

@endsection