@extends('layouts.login', ['Title' => 'Login'])

@section('content')
    <div class="login-main-inner">
        <div class="login-main">
            <div class="row m-0">
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="login-img">
                        <img src="{{ asset('user/images/login-left.png') }}">
                        <h3>Choose<br>Your Name</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="register-main">
                        <h1>Login</h1>
                        <h2>Login to your account</h2>
                        <div class="form-main">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="fields">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <i class="fa fa-envelope"></i>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" autocomplete="email"
                                                   autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <i class="fa fa-lock"></i>
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-md-6 col-6">
                                            <label class="check">Remember me
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-6"><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a></div>
                                    </div>
                                    <button type="submit" class="form-control">Login<i class="fa fa-angle-right"
                                                                                       aria-hidden="true"></i></button>
                                    <div class="new-user">
                                        <p>Not a Member? Register Now</p>
                                        <a href="{{ route('register') }}" class="login">Register<i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <a href="{{ url('/') }}" class="login back"><i
                                                class="fa fa-long-arrow-left"></i>back to home</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
