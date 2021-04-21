@extends('admin.layouts.app')
@section('title', 'Products Details')

@push('style')

@endpush

@section('content')
    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.products.index') }}">Product</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Details</strong>
                </li>
            </ol>
            <a class="btn btn-sm btn-primary pull-right m-t-n-md boardCreateModalShow"
               href="{{ route('admin.products.index') }}"><i
                    class="fa fa-list"></i> <strong>ALL PRODUCT</strong></a>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title text-center">
                        <h1>Product Details</h1>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Category
                                            :</strong> {{ @$product->category->name }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Brand : </strong>{{ @$product->brand->name }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label id="product_name" class="control-label"><strong>Name : </strong>{{ @$product->name }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label id="product_name" class="control-label"><strong>Weight
                                            : </strong>{{ @$product->weight }}</label>
                                </div>
                            </div>

                        @if(@$product->price)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="product_price" class="control-label"><strong>Price : </strong>
                                            ${{ @$product->price }}</label>
                                    </div>
                                </div>
                            @endif
                            @if(@$product->discount_price)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="product_discount_price" class="control-label"><strong>Discount Price :</strong>${{ @$product->discount_price ?? 'N/A' }}</label>

                                    </div>
                                </div>
                            @endif

                            @if(@$product->stock)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Quantity :</strong>{{ @$product->stock ?? 'N/A' }}</label>

                                    </div>
                                </div>
                            @endif

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="product_code" class="control-label"><strong>Code
                                                : </strong>{{ @$product->code ?? 'N/A' }}</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="product_details" class="control-label"><strong>Details</strong></label>
                                        <p>{{ @$product->details ?? 'N/A' }}</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(isset($product->color) && count(json_decode(@$product->color)) > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Product <strong>Colo</strong>r
                            </h5>
                        </div>
                        <div class="ibox-content">
                            <!--Start=> predefine product price with size section-->
                            <div class="row">
                                <div class="col-md-4">
                                    @if( isset($product) && @$product->color)
                                        <div class="row">
                                            <div class="col-md-10">
                                                <label id="product_color_arr" class="control-label"><strong>Color
                                                        : </strong></label>
                                                @foreach(json_decode(@$product->color) as $key => $color)
                                                    <span class="badge badge-info">{{ @$color }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!--End=> predefine product price with size section-->
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if( isset($product) && @$product->images->count() > 0)
        <!-- Start => file upload section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Product <strong>File </strong> Upload</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach(@$product->images as $image)
                                            <div class="col-2" id="removeProductImageSection">
                                                <div class="input-group">
                                                    <img class="d-block" width="100%"
                                                         src="{{ @$image->url }}"
                                                         alt="{{ @$image->type }}">
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
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Activities</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-2">
                                <div class="input-group">
                                    <label><strong>Created At : </strong> <span
                                            class="badge badge-info">{{ @$product->created_at->diffforHumans() }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label><strong>Updated At : </strong> <span
                                            class="badge badge-info">{{ @$product->updated_at->diffforHumans() }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label><strong>Status : </strong> <span
                                            class="badge {{ @$product->status === 0 ? 'badge-danger' : 'badge-primary' }}">{{ @$product->status === 0 ? 'Deactivate' : 'Active' }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

