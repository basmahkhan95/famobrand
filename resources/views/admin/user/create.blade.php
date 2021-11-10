@extends('admin.layouts.auth', ['Title' => 'Add User'])

@section('content')
    <div class="app-content content view user add-user">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1 class="pull-left">
                                                        <a href="{{ route('admin.user.index') }}" class="back">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>Add User
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <form action="{{ route('admin.user.store') }}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <label for="">Name</label>
                                                            <input type="text" name="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" maxlength="50">
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" name="email"
                                                                   placeholder="Enter Email Address"
                                                                   class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" maxlength="100">
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Phone No.</label>
                                                            <input type="text" name="phone_no" placeholder="Enter Phone No." value="{{ old('phone_no') }}"
                                                                   class="form-control famo-input-mask-phone-us @error('phone_no') is-invalid @enderror">
                                                            @error('phone_no')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <button type="submit">Add</button>
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
                </section>
            </div>
        </div>
    </div>
@endsection
