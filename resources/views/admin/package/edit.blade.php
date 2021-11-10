@extends('admin.layouts.auth', ['Title' => 'Edit Package'])

@section('content')
    <div class="app-content content view user add-user edit-pkg">
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
                                                    <h1><a href="{{ route('admin.package.index') }}" class="back"><i
                                                                class="fa fa-angle-left"></i></a>Package Management</h1>
                                                    <h1>Edit Package Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <form action="{{ route('admin.package.update', ['id' => $Package->id]) }}"
                                                  method="post">
                                                @csrf
                                                <div class="col-12">
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Package Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="name"
                                                                   placeholder="Enter Package Name"
                                                                   class="form-control @error('name') is-invalid @enderror"
                                                                   value="{{ isset($_POST['name']) ? $_POST['name'] : $Package->name }}">
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Package Type:</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="package_type" @error('package_type') is-invalid @enderror>
                                                                <option value="">-- Select --</option>
                                                                @foreach(\App\PackageType::all() as $type)
                                                                    <option value="{{ $type->id }}" {{ old('package_type', $Package->package_type) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('package_type')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Amount</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="amount" placeholder="Enter Amount"
                                                                   id=""
                                                                   class="form-control @error('amount') is-invalid @enderror"
                                                                   value="{{ isset($_POST['amount']) ? $_POST['amount'] : $Package->amount }}">
                                                            @error('amount')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-4">
                                                            <label for="">Description</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <textarea name="description"
                                                                      id="famo-input-package-description"
                                                                      class="form-control @error('description') is-invalid @enderror">{{ isset($_POST['description']) ? $_POST['description'] : $Package->description }}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-6">
                                                            <button
                                                                href="{{ route('admin.package.show', ['id' => $Package->id]) }}"
                                                                class="can">Cancel
                                                            </button>
                                                            <button type="submit" class="con">Update</button>
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
    </div>
@endsection
