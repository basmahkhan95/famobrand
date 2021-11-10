@extends('admin.layouts.auth', ['Title' => 'Testimonials'])

@section('content')
    <div class="app-content content view user testi">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic form layout section start -->
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
                                                    <h1>Testimonials</h1>
                                                </div>
                                                <div class="right">
                                                    <a href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#famo-modal-add-testimonial">
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>Add
                                                        Testimonial</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12">
                                                @foreach($Testimonials as $key)
                                                    <div class="card rounded testi-box">
                                                        <div class="card-content">
                                                            <div class="card-body cleartfix">
                                                                <div class="media">
                                                                    <div class="media-body mr-1 align-self-center">
                                                                        <h4>{{ $key->client_name }}</h4>
                                                                        <p class="famo-ellipsis">{{ $key->testimonial }}</p>
                                                                        <h5>{{ $key->created_at }}</h5>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                                class="btn  btn-drop-table btn-sm"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"><i
                                                                                class="fa fa-ellipsis-v"></i></button>
                                                                        <div class="dropdown-menu dropdown-menu-right"
                                                                             x-placement="bottom-start"
                                                                             style="position: absolute; transform: translate3d(0px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                            <a class="dropdown-item famo-btn-view-testimonial"
                                                                               href="javascript:void(0)"
                                                                               data-id="{{ $key->id }}"
                                                                               data-clientName="{{ $key->client_name }}"
                                                                               data-testimonial="{{ $key->testimonial }}">
                                                                                <i class="fa fa-eye"></i> View</a>
                                                                            <a class="dropdown-item famo-btn-edit-testimonial"
                                                                               href="javascript:void(0)"
                                                                               data-id="{{ $key->id }}"
                                                                               data-clientName="{{ $key->client_name }}"
                                                                               data-testimonial="{{ $key->testimonial }}"><i
                                                                                    class="fa fa-pencil-square-o"></i>Edit</a>
                                                                            <a class="dropdown-item famo-swal-delete"
                                                                               href="javascript:void(0)"
                                                                               data-route="{{ route('admin.testimonial.delete', ['id' => $key->id]) }}"><i
                                                                                    class="fa fa-trash"></i> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
    <div class="login-fail-main user change-pass">
        <div class="featured inner">
            @include('admin.inc.modal-add-testimonial')
            @include('admin.inc.modal-view-testimonial')
            @include('admin.inc.modal-edit-testimonial')
        </div>
    </div>
@endsection
