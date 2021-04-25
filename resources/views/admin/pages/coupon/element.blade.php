@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endpush

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Title</label>
            <input name="title" value="{{ isset($coupon) ? $coupon->title : old('title') }}"
                   type="text"
                   placeholder="Enter title" class="form-control">

            @error('title')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Coupon Code</label><span class="required-star"> *</span>
            <input name="code" value="{{ isset($coupon) ? $coupon->code : old('code') }}" type="text"
                   placeholder="Enter coupon code" class="form-control" required>

            @error('code')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Amount</label><span class="required-star"> *</span>
            <input name="amount" value="{{ isset($coupon) ? $coupon->amount : old('amount') }}" type="number"
                   placeholder="Enter amount" class="form-control" required>

            @error('amount')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Amount Type</label><span class="required-star"> *</span>
            <select class="form-control" name="apply_type" required>
                <option value="">Select One</option>

                @php($check_selected_apply_type = isset($coupon) ? $coupon->apply_type : old('apply_type'))

                @foreach($apply_types as $key => $type)
                    <option {{ $check_selected_apply_type == $key ? 'selected' : ''}} value="{{ $key }}">
                        {{ ucfirst($type) }}
                    </option>
                @endforeach
            </select>

            @error('apply_type')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Start Date</label><span class="required-star"> *</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input name="started_at" value="{{ isset($coupon) ? $coupon->started_at : old('started_at') }}"
                       placeholder="Enter start date"
                       class="form-control date"
                       type="text"
                       required>
            </div>

            @error('started_at') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Expire Date</label><span class="required-star"> *</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input name="expired_at" value="{{ isset($coupon) ? $coupon->expired_at : old('expired_at') }}"
                       placeholder="Enter expire date"
                       class="form-control date"
                       type="text"
                       required>
            </div>

            @error('expired_at') <span class="help-block m-b-none text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Status</label>
            <div>
                <label for="status">
                    <input {{ isset($coupon) && $coupon->status || old('status') ? 'checked' : '' }}
                           type="checkbox"
                           id="status"
                           name="status"
                           class="i-checks form-control">
                    &nbsp; Active
                </label>
            </div>
        </div>
    </div>
</div>

<div class="form-group m-b-none">
    <a href="{{ route('admin.coupons.index') }}"
       class="btn btn-sm btn-danger">
        Cancel
    </a>
    <button class="btn btn-sm btn-primary" type="submit">
        {{ isset($coupon) ? 'Update' : 'Submit' }}
    </button>
</div>

@push('script')
    <script>
        $(".date").flatpickr({
            enableTime: true,
            allowInput: true
        });
    </script>
@endpush
