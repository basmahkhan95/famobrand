@extends('admin.layouts.guest', ['Title' => 'Reset Password'])

@section('content')
    <section class="register loginn">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xl-3"></div>
                <div class="col-md-8 col-xl-6 col-12">
                    <div class="register-main">
                        <img src="{{ asset('admin/images/logo-reg.png') }}" class="img-full" alt="logo">
                        <div class="form-main">
                            <h1>{{ __('Reset Password') }}</h1>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.password.email') }}" method="post">
                                @csrf
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input spellcheck="true" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   value="{{ old('email') }}" name="email" spellcheck="true"
                                                   placeholder="Enter Email Address">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="form-control">{{ __('Send Password Reset Link') }}</button>
                                    <a href="{{ route('admin.login') }}" class="login back"><i class="fa fa-long-arrow-left"></i>back to login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xl-3"></div>
            </div>
        </div>
    </section>
@endsection
