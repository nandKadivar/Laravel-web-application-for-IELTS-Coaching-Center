@extends('layouts.app')

@section('content')

<main class="d-flex align-items-center justify-content-center" style="background-color: #f1f1f1">
    <div class="d-flex flex-column align-items-center login-card">
        <div>
            <img src="/media/logos/logo-3.svg" />
        </div>

        <div class="align-items-center justify-content-center mt-5" style="width: 80%">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="d-flex flex-column align-items-center input-card">
                    <div class="d-flex flex-column align-items-center form-group">
                        <div class="d-flex flex-row align-items-center justify-content-between input-container">
                            <div class="input-icon"><i class="fas fa-user"></i></div>
                            <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        </div>
                    </div>
                    
                    @error('email')
                        <div class="d-flex flex-row align-items-center justify-content-center error-container my-1 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="d-flex flex-row align-items-center justify-content-center remenber-me-container my-4">
                        <div>
                            <button type="submit" class="btn btn-danger" style="width: 250px; height: 50px">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</main>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
