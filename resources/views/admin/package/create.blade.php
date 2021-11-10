@extends('admin.layouts.auth', ['Title' => 'Add Package'])

@section('content')
    <div class="app-content content view user add-user edit-pkg">
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
                                                    <h1><a href="{{ route('admin.package.index') }}" class="back"><i
                                                                class="fa fa-angle-left"></i></a>Package Management</h1>
                                                    <h1>Package Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <form action="{{ route('admin.package.store') }}" method="post">
                                                @csrf
                                                <div class="col-12">
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-2 col-lg-3 col-12">
                                                            <label for="">Package Name</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-9 col-12">
                                                            <input type="text" name="name"
                                                                   placeholder="Enter Package Name"
                                                                   class="form-control @error('name') is-invalid @enderror"
                                                                   maxlength="100" value="{{ old('name') }}">
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-2 col-lg-3 col-12">
                                                            <label for="">Amount</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-9 col-12">
                                                            <input type="number" name="amount"
                                                                   placeholder="Enter Amount"
                                                                   class="form-control @error('amount') is-invalid @enderror"
                                                                   value="{{ old('amount') }}">
                                                            @error('amount')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-xl-2 col-lg-3 col-12">
                                                            <label for="">Package Type:</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-9 col-12">
                                                            <select class="form-control" name="package_type" @error('package_type') is-invalid @enderror>
                                                                <option value="">-- Select --</option>
                                                                @foreach(\App\PackageType::all() as $type)
                                                                    <option value="{{ $type->id }}" {{ old('package_type') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('package_type')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-xl-2 col-lg-3 col-12">
                                                            <label for="">Description</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-9 col-12">
                                                            <textarea name="description"
                                                                      id="famo-input-package-description"
                                                                      class="form-control @error('description') is-invalid @enderror ">{{ old('description') }}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-3 col-12">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-9 col-12">
                                                            <button type="submit">Add</button>
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
