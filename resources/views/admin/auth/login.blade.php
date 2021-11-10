@extends('admin.layouts.guest', ['Title' => 'Login'])

@section('content')
    <section class="register loginn">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xl-3"></div>
                <div class="col-md-8 col-xl-6 col-12">
                    <div class="register-main">
                        <img src="{{ asset('admin/images/logo-reg.png') }}" class="img-full" alt="logo">
                        <div class="form-main">
                            <h1>Login to your account</h1>
                            <form action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input spellcheck="true" type="email" name="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   spellcheck="true"
                                                   placeholder="Email Address" value="{{ old('email') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <i class="fa fa-key"></i>
                                            <input spellcheck="true" type="password" spellcheck="true"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" placeholder="Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6 col-6">
                                            <label class="check">Remember me
                                                <input spellcheck="true" type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-6"><a href="{{ route('admin.password.request') }}">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="form-control">Login</button>
                                    <a href="{{ route('admin.login') }}" class="login back"><i class="fa fa-long-arrow-left"></i>back to
                                        Home</a>
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
