@extends('admin.layouts.app')

@section('title', 'Coupon Edit')

@section('content')
    <div class="row wrapper border-bottom white-bg py-3">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.coupons.index') }}">Coupon</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Edit</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Update Coupon</h5>
                    </div>

                    <div class="ibox-content">
                        <form role="form" action="{{ route('admin.coupons.update', $coupon->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('admin.pages.coupon.element')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
