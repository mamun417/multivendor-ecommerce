@extends('admin.layouts.app')

@section('title', 'Site Setting')

@section('content')

    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Site Setting</strong>
                </li>
            </ol>
            <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
               href="#"><i
                    class="fa fa-edit"></i> <strong>Edit</strong></a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="{{ route('admin.setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
            @method("put")
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Site Setting</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row">

                                <div class="col-md-12">
                                    <img src="{{ $setting->image->url }}" alt="">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Logo<span class="required-star"> *</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input accept="image/*" type="file" name="image"
                                                       class="custom-file-input" id="image imgInp">
                                                <label class="custom-file-label" for="image">Choose new one</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Phone Number<span
                                                class="required-star"> *</span></label>
                                        <input id="phone" type="text"
                                               value="{{ isset($setting) ? @$setting->phone : old('phone')}}"
                                               name="phone" class="form-control" autofocus>

                                        @error('phone')
                                        <span class="help-block m-b-none text-danger">
                                            {{ @$message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Email<span
                                                class="required-star"> *</span></label>
                                        <input id="name" type="text"
                                               value="{{ isset($setting) ? @$setting->email : old('email')}}"
                                               name="email" class="form-control" autofocus>

                                        @error('email')
                                        <span class="help-block m-b-none text-danger">
                                            {{ @$message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Address<span
                                                class="required-star"> *</span></label>
                                        <input id="address" type="text"
                                               value="{{ isset($setting) ? @$setting->address : old('address')}}"
                                               name="address" class="form-control" autofocus>

                                        @error('address')
                                        <span class="help-block m-b-none text-danger">
                                            {{ @$message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <a href="#" class="btn btn-danger"
                                           type="submit">Cancel</a>
                                        <button class="btn btn-primary" type="submit">Save Change</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
