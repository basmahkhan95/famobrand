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
                        <h1>Forgot Password</h1>
                        <h2>Please enter your email</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-main">
                            <form action="{{ route('password.email') }}" method="post">
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
                                    </div>

                                    <button type="submit" class="form-control">{{ __('Send Password Reset Link') }}<i class="fa fa-angle-right"
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
