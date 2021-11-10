@extends('layouts.login', ['Title' => 'Register'])

@section('content')
    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
        <div class="login-main-inner">
            <div class="login-main">
                <div class="row">
                    <div class="col-12">
                        <div class="register-main">
                            <h1>Register</h1>
                            <h2>Register to your account</h2>
                            <div class="form-main">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="fields">
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <i class="fa fa-user-circle"></i>
                                                <input id="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       name="name" value="{{ old('name') }}"
                                                       autocomplete="name" autofocus placeholder="Enter Name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <i class="fa fa-envelope"></i>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}"
                                                       autocomplete="email" placeholder="Enter Email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <i class="fa fa-phone"></i>
                                                <input
                                                    class="form-control famo-input-mask-phone-us @error('phone_no') is-invalid @enderror"
                                                    autocomplete="telephone" name="phone_no" placeholder="Enter Phone No">
                                                @error('phone_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <i class="fa fa-lock"></i>
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" autocomplete="new-password"
                                                       placeholder="Enter Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <i class="fa fa-lock"></i>
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" autocomplete="new-password"
                                                       placeholder="Confirm Password">
                                            </div>
                                        </div>

                                        <div class="new-user">
                                            <button type="submit" class="form-control">Register<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></button>
                                            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
