@extends('admin.layouts.auth', ['Title' => 'Feedback Details'])

@section('content')
    <div class="app-content content view user profile">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1><a href="{{ route('admin.feedback.index') }}" class="back"><i class="fa fa-angle-left"></i></a>Feedback Log</h1>
                                                    <h1>Message Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <label for="">Name</label>
                                                            <input type="text" value="{{ $Feedback->name }}" id="" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" value="{{ $Feedback->email }}" id="" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Phone No</label>
                                                            <input type="text" value="{{ $Feedback->phone_no }}" id="" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Subject</label>
                                                            <input type="text" value="{{ $Feedback->subject }}" class="form-control" disabled="">
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="">Message</label>
                                                            <textarea class="form-control" disabled="">{{ $Feedback->message }}</textarea>
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
