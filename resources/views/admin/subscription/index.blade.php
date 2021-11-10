@extends('admin.layouts.auth', ['Title' => 'Subscription Log'])

@section('content')
    <div class="app-content content view user">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-12">
                            <div class="card pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1>Subscription Log</h1>
                                                    <h1>Total Earnings: <span>{{ @App\Helpers\thousandsCurrencyFormat($Subscription->sum('amount')) }}<i
                                                                class="fa fa-money"
                                                                aria-hidden="true"></i></span></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2 filter-main justify-content-between">

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="row align-items-end justify-content-end">
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  form-group">
                                                        <label>Filter By:</label>
                                                        <label for="">From:</label>
                                                        <input id="fromSelector" type="text" data-index="5" readonly>
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
                                                    <th>User</th>
                                                    <th>Package Name</th>
                                                    <th>Email</th>
                                                    <th>Amount</th>
                                                    <th>Subscription Date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($Subscription as $key => $value)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td><a href="{{ route('admin.user.show',['id' => $value->user->id]) }}"><span data-toggle="popover" data-content="johny" class="circle" style="background: #f61454;">{{ $value->user->name[0] }}</span>{{ $value->user->name }}</a></td>
                                                        <td><a href="{{ route('admin.package.show',['id' => $value->package->id]) }}"><span data-toggle="popover" data-content="johny" class="circle" style="background: #f61454;">{{ $value->package->name[0] }}</span>{{ $value->package->name }}</a></td>
                                                        <td>{{ $value->user->email }}</td>
                                                        <td>{{ $value->amount }}</td>
                                                        <td>{{ $value->created_at }}</td>
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
