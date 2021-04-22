<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Coupon Code</label><span class="required-star"> *</span>
            <input name="code" value="{{ isset($update) ? $coupon->code : old('code') }}" type="text"
                   placeholder="Enter code" class="form-control" required>

            @error('code')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Amount</label><span class="required-star"> *</span>
            <input name="amount" value="{{ isset($update) ? $coupon->amount : old('amount') }}" type="number"
                   placeholder="Enter amount" class="form-control" required>

            @error('amount')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Amount Type</label><span class="required-star"> *</span>
            <select class="form-control" name="amount_type" required>
                <option value="">Select One</option>

                @php($check_selected_amount_type = isset($update) ? $coupon->amount_type : old('amount_type'))

                @foreach($apply_types as $key => $type)
                    <option {{ $check_selected_amount_type == $key ? 'selected' : ''}} value="{{ $key }}">
                        {{ ucfirst($type) }}
                    </option>
                @endforeach
            </select>

            @error('amount_type')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Start Date</label><span class="required-star"> *</span>
            <input name="expire_date" value="{{ isset($update) ? $coupon->expire_date : old('expire_date') }}"
                   type="datetime-local"
                   placeholder="Enter expire date" class="form-control" required>

            @error('expire_date')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Expire Date</label><span class="required-star"> *</span>
            <input name="expire_date" value="{{ isset($update) ? $coupon->expire_date : old('expire_date') }}"
                   type="datetime-local"
                   placeholder="Enter expire date" class="form-control" required>

            @error('expire_date')
            <span class="help-block m-b-none text-danger">{{ $message }}</span>
            @enderror
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
        {{ isset($update) ? 'Update' : 'Submit' }}
    </button>
</div>
