@extends('admin.layouts.auth', ['Title' => 'My Profile'])

@section('content')
    <div class="app-content content view user profile edit-pkg">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    @include('admin.inc.flash-message')
                                    <div class="card-body table-responsive card-dashboard">

                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1>My Profile</h1>
                                                </div>
                                            </div>
{{--                                            <div class="col-12">--}}
{{--                                                <div class="attached">--}}
{{--                                                    <h2>Profile Picture</h2>--}}
{{--                                                    <img src="images/student-pro-girl.png" class="img-full" alt="">--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Personal Info</h3>
                                            </div>
                                            <form action="">
                                                <div class="col-12">
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-3 col-sm-3 col-12">
                                                            <label for="">Name</label>
                                                        </div>
                                                        <div class="col-xl-8 col-sm-9 col-12">
                                                            <input type="text" placeholder="name" id=""
                                                                   class="form-control" disabled="" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-3 col-sm-3 col-12">
                                                            <label for="">Email</label>
                                                        </div>
                                                        <div class="col-xl-8 col-sm-9 col-12">
                                                            <input type="email"
                                                                   placeholder="email" id=""
                                                                   class="form-control" disabled="" value="{{ Auth::user()->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-sm-6 col-12">
                                                            <a href="{{ route('admin.profile.edit') }}">Edit Info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
@endsection
