@extends('admin.layouts.auth', ['Title' => 'Users'])


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
                                                    <h1>User Management</h1>
                                                    @if(isset($_GET['is_block']))
                                                        <h1 class="pull-left">
                                                            <a href="{{ route('admin.user.index') }}" class="back">
                                                                <i class="fa fa-angle-left"></i>
                                                            </a>Blocked Users
                                                        </h1>
                                                    @else
                                                        <h1>Users</h1>
                                                    @endif
                                                </div>
                                                <div class="right">
                                                    @if(!isset($_GET['is_block'])):
                                                    <a href="{{ route('admin.user.index', ['is_block' => true]) }}"><i
                                                            class="fa fa-ban" aria-hidden="true"></i> Blocked Users</a>
                                                    @endif
                                                    <a href="{{ route('admin.user.create') }}"><i
                                                            class="fa fa-plus-circle" aria-hidden="true"></i> Add
                                                        User</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2 filter-main justify-content-between">

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="row align-items-end justify-content-end">
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">
                                                        <label>Filter By:</label>
                                                        <label for="">From:</label>
                                                        <input id="fromSelector" type="text" data-index="3" readonly>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">
                                                        <label for="">To:</label>
                                                        <input id="toSelector" type="text" readonly>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row maain-tabble mt-1">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>S#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Registered Since</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($Users as $key => $value)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td><span data-toggle="popover"
                                                                  data-content="{{ $value->name }}"
                                                                  class="circle"
                                                                  style="background: #f61454;">{{ $value->name[0] }}</span>{{ $value->name }}
                                                        </td>
                                                        <td>{{ $value->email }}</td>
                                                        <td>{{ $value->created_at }}</td>
                                                        <td>
                                                            <div class="btn-group mr-1 mb-1">
                                                                <button type="button" class="btn  btn-drop-table btn-sm"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"><i
                                                                        class="fa fa-ellipsis-v"></i></button>
                                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                                     style="position: absolute; transform: translate3d(4px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                    <a class="dropdown-item"
                                                                       href="{{ route('admin.user.show', ['id' => $value->id]) }}"><i
                                                                            class="fa fa-eye"></i>View</a>
                                                                    <a class="dropdown-item"
                                                                       href="{{ route('admin.user.edit', ['id' => $value->id]) }}"><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>Edit</a>
                                                                    <a class="dropdown-item famo-swal-delete"
                                                                       href="javascript:void(0)"
                                                                       data-route="{{ route('admin.user.delete', ['id' => $value->id]) }}"><i
                                                                            class="fa fa-ban"
                                                                            aria-hidden="true"></i>{{ ($value->is_block) ? 'unblock' : 'block' }}
                                                                    </a>
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
