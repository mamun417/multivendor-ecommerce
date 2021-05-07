@extends('admin.layouts.app')
@section('title', 'Products Edit')

@section('content')
    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.products.index') }}">Products</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Update</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="{{ route('admin.products.update', @$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.pages.products.elements')

            <a href="{{ route('admin.products.index') }}" class="btn btn-danger" type="submit">Cancel</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection

@push('script')
   @include('admin.pages.products.admin-product-script')
@endpush
