@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
    <main class="row col-md-12">
        <div class="col-md-8 illustration-container" style="background-color: #fff">
            <img src="/media/logos/register.svg" style="width: 300px;height:300px;" />
            <img src="/media/images/background/study-abroad-3.png" style="width: 500px;height:250px;" />
        </div>
        <div class="col-md-4 register-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group-container">
                    <div class="input-group-label" style="">Name</div>
                    <div class="input-row">
                        <input type="text" id="fname" name="fname" class="input-type-2" placeholder="First" required/>
                        <input type="text" id="lname" name="lname" class="input-type-2" placeholder="Last" required/>
                    </div>
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    <div class="input-group-label" style="">Enter you valid email address</div>
                    <div class="input-row">
                        <input type="email" id="email" name="email" class="input-type-2" style="width: 100%" placeholder="Email" required/>
                    </div>
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    <div class="input-group-label" style="">Create a password</div>
                    <div class="input-row">
                        <input type="password" id="password" name="password" class="input-type-2" style="width: 100%" placeholder="Choose a strong password" required/>
                    </div>
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    <div class="input-group-label" style="">Confirm your password</div>
                    <div class="input-row">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="input-type-2" style="width: 100%" placeholder="Re-write your password" required/>
                    </div>
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    <div class="input-group-label" style="">IELTS module</div>
                    <div class="input-row">
                        <select class="select-input" id="module" name="module">
                            <option value="academic" selected>Academic</option>
                            <option value="general">General</option>
                        </select>
                    </div>
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    <div class="input-group-label" style="">Country you are planning to go</div>
                    <div class="input-row">
                        <select class="select-input" id="planningcountry" name="planningcountry">
                            <option value="Canada" selected>Canada</option>
                            <option value="US">US</option>
                            <option value="Australia">Australia</option>
                            <option value="New zeland">New zeland</option>
                            <option value="UK">UK</option>
                            <option value="Other">Other</option>
                        </select>
                        {{-- <select class="selectpicker countrypicker" data-countries="AT,BE,BG,HR,CY,CZ,DK,EE,FI,FR,DE,GR,HU,IE,IT,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,ES,SE" ></select> --}}
                    </div>
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    <div class="input-row  register-btn">
                        <button type="submit" class="btn btn-danger" style="width: 100%; height: 50px">
                            {{ __('Register') }}
                        </button>
                    </div>
                    @if (Route::has('register'))
                        <div class="d-flex flex-row align-items-center justify-content-center register-link-container mt-3">
                            <p class=""> Already have an account? 
                                <a class="btn-link" style="color: #333" href="{{ route('login') }}">login</a>
                            </p>
                        </div>
                    @endif
                </div>

                <div class="input-group-container" style="margin-top: 25px">
                    @error('fname')
                        <div class="d-flex flex-row align-items-center justify-content-center error-container my-1 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('lname')
                        <div class="d-flex flex-row align-items-center justify-content-center error-container my-1 alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
                </div>
            </form>
        </div>
    </main>

    {{-- <script>
        $('.countrypicker').countrypicker();
    </script>  --}}
@endsection
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

