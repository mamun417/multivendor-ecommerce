@extends('admin.layouts.app')
@section('title', 'Coupons')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Coupons</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All Coupons</h5>
                        <a href="{{ route('admin.coupons.create') }}" class="btn btn-sm btn-primary pull-right">
                            <i class="fa fa-plus"></i> <strong>Create</strong>
                        </a>
                    </div>

                    <div class="ibox-content">
                        <form action="{{ route('admin.brands.index')}}" method="get"
                              role="form">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="perPage" class="control-label">Records Per Page</label>
                                        </div>
                                        <div class="col-md-4 pr-0 responsive_p_r_15">
                                            <select name="perPage" id="perPage" onchange="submit()"
                                                    class="input-sm form-control custom_field_height">
                                                <option value="10"{{ request('perPage') == 10 ? ' selected' : '' }}>
                                                    10
                                                </option>
                                                <option value="25"{{ request('perPage') == 25 ? ' selected' : '' }}>
                                                    25
                                                </option>
                                                <option value="50"{{ request('perPage') == 50 ? ' selected' : '' }}>
                                                    50
                                                </option>
                                                <option value="100"{{ request('perPage') == 100 ? ' selected' : '' }}>
                                                    100
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 pl-sm-1 pr-sm-1 responsive_p_t_f_5">
                                            <div class="float-left input-group">
                                                <input name="keyword" type="text" value="{{ request('keyword') }}"
                                                       class="input-sm form-control" placeholder="Search Here">
                                                <span class="input-group-btn">
                                                        <button type="submit"
                                                                class="btn btn-sm btn-primary custom_field_height"> Go!</button>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-1 p-0 responsive_p_l_15">
                                                <span>
                                                    <a href="{{ route('admin.coupons.index') }}"
                                                       class="btn btn-default btn-sm custom_field_height">Reset
                                                    </a>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </form>

                        <div class="table-responsive m-t-md">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-left">Coupon Code</th>
                                    <th>Amount</th>
                                    <th>Amount Type</th>
                                    <th>Status</th>
                                    <th>Start At</th>
                                    <th>Expire At</th>
                                    <th>Create At</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($coupons as $coupon)
                                    <tr>
                                        <td class="text-left">{{ $coupon->code }}</td>
                                        <td>{{ $coupon->amount }}</td>
                                        <td>
                                            {{ ucfirst(\App\Http\Controllers\Helpers\CouponHelper::getTypeDisplayName($coupon->apply_type)) }}
                                        </td>

                                        <td>
                                            <a onclick="changeStatus(this)" id="{{ $coupon->id }}"
                                               data-route="{{ route('admin.coupons.status.change', '') }}"
                                               href="javascript:void(0)"
                                               title="Change publication status">
                                                @if($coupon->status)
                                                    <span class="badge badge-primary"><strong>Active</strong></span>
                                                @else
                                                    <span
                                                        class="badge badge-warning"><strong>Disable</strong></span>
                                                @endif
                                            </a>
                                        </td>

                                        <td>
                                            {{ $coupon->started_at->diffForHumans() }}
                                        </td>

                                        <td>
                                            {{ $coupon->expired_at->diffForHumans() }}
                                        </td>

                                        <td>{{ $coupon->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a href="{{ route('admin.coupons.edit', $coupon->id)  }}" title="Edit"
                                               class="btn btn-info btn-sm cus_btn">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>

                                            <button onclick="deleteRow({{ $coupon->id }})" href="JavaScript:void(0)"
                                                    title="Delete" class="btn btn-danger btn-sm cus_btn">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <form id="row-delete-form{{ $coupon->id }}" method="POST" class="d-none"
                                                  action="{{ route('admin.coupons.destroy', $coupon->id) }}">
                                                @method('DELETE')
                                                @csrf()
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if (count($coupons))
                            <div class="dataTables_info table-pagination" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">
                                <div class="m-r-lg">
                                    Showing {{ $coupons->firstItem() }} to {{ $coupons->lastItem() }}
                                    of {{ $coupons->total() }} entries
                                </div>
                                {{ $coupons->appends(['perPage' => request('perPage'), 'keyword' => request('keyword')])->links() }}
                            </div>
                        @else
                            <div class="text-center">No coupons found</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
