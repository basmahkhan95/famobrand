@extends('admin.layouts.auth', ['Title' => 'Notifications'])

@section('content')
    <div class="app-content content view user all-notifications">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1 col-12">
                            <div class="add-user">
                                <div class="card rounded pad-20">
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h1 class="pull-left">Notifications</h1>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    @foreach($Notifications as $notif)
                                                        <div class="noti-inner-cards mb-3">
                                                            <div class="card mt-3">
                                                                <div class="notification-title">
                                                                    <h5>{{ $notif->title }}</h5>
                                                                    <a href="{{ $notif->url }}">View</a>
                                                                </div>
                                                                <div class="noti-content">
                                                                    <div class="media align-items-center">
                                                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                                        <div class="media-body">
                                                                            <p>{{ $notif->description }}</p>
                                                                        </div>
                                                                        <h5>{{ $notif->created_at }}</h5>
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
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
