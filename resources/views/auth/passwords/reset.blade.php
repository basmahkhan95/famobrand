@extends('layouts.login', ['Title' => 'Forgot Password'])

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
                        <h1>Reset Password</h1>
                        <h2>Please enter new password</h2>
                        <div class="form-main">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="fields">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <i class="fa fa-envelope"></i>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" placeholder="Enter Email" value="{{ old('email') }}" autocomplete="email"
                                                   autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <i class="fa fa-key"></i>
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" value="" placeholder="Enter New Password" autocomplete="password"
                                                   autofocus>

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <i class="fa fa-key"></i>
                                            <input id="password" type="password"
                                                   class="form-control"
                                                   name="password_confirmation" placeholder="Retype Password" value="" autocomplete="password"
                                                   autofocus>
                                        </div>

                                    </div>

                                    <button type="submit" class="form-control">{{ __('Reset Password') }}<i class="fa fa-angle-right"
                                                                                                                      aria-hidden="true"></i></button>
                                    <div class="new-user">
                                        <p>Not a Member? Register Now</p>
                                        <a href="{{ route('register') }}" class="login">Register<i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <a href="{{ route('login') }}" class="login back"><i
                                                class="fa fa-long-arrow-left"></i>back to login</a>
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
