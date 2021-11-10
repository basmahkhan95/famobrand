@extends('admin.layouts.auth', ['Title' => 'Packages'])

@section('content')
    <div class="app-content content view user">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    @include('admin.inc.flash-message')
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1>Package Management</h1>
                                                    <h1>Packages</h1>
                                                </div>
                                                <div class="right">
                                                    <a href="{{ route('admin.package.create') }}"><i
                                                            class="fa fa-plus-circle"
                                                            aria-hidden="true"></i> Add Package</a>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="row mt-2 filter-main justify-content-between">--}}

{{--                                            <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                                                <div class="row align-items-end justify-content-end">--}}
{{--                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">--}}
{{--                                                        <label>Filter By:</label>--}}
{{--                                                        <label for="">From:</label>--}}
{{--                                                        <input id="select-date2" type="text" disabled="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">--}}
{{--                                                        <label for="">To:</label>--}}
{{--                                                        <input id="select-date" type="text" disabled="">--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="row maain-tabble mt-1">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>S#</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($Packages as $key => $value)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td><span data-toggle="popover" data-content="johny"
                                                                  class="circle"
                                                                  style="background: #f61454;">{{ $value->name[0] }}</span>{{ $value->name }}
                                                        </td>
                                                        <td>{{ @$value->package_type()->first()->name }}</td>
                                                        <td>{{ $value->amount }}</td>
                                                        <td>
                                                            <div class="btn-group mr-1 mb-1">
                                                                <button type="button" class="btn  btn-drop-table btn-sm"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"><i
                                                                        class="fa fa-ellipsis-v"></i></button>
                                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                                     style="position: absolute; transform: translate3d(4px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                    <a class="dropdown-item"
                                                                       href="{{ route('admin.package.show',['id' => $value->id]) }}"><i
                                                                            class="fa fa-eye"></i>View</a>
                                                                    <a class="dropdown-item"
                                                                       href="{{ route('admin.package.edit',['id' => $value->id]) }}"><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>Edit</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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
