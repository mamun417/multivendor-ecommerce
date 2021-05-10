<div class="col-6">
    <div class="form-group">
        <label id="vendor_name" for="">Vendor Name <span
                class="required-star"> *</span></label>
        <input id="vendor_name" type="text" required
               class="form-control @error('vendor_name') is-invalid @enderror"
               name="vendor_name" value="{{ isset($vendor) ? $vendor->vendor_name : old('vendor_name') }}"
               autocomplete="vendor_name"
               autofocus placeholder="Enter vendor name">
        @error('vendor_name')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="name" for="">Vendor Owner Name <span
                class="required-star"> *</span></label>
        <input id="name" type="text" required
               class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ isset($vendor) ? $vendor->name : old('name') }}"
               autocomplete="name"
               autofocus placeholder="Enter vendor owner name">
        @error('name')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="nid" for="">NID Number <span
                class="required-star"> *</span></label>
        <input id="nid" type="text" required
               class="form-control @error('nid') is-invalid @enderror"
               name="nid" value="{{ isset($vendor) ? $vendor->nid : old('nid') }}"
               autocomplete="nid"
               autofocus placeholder="Enter nid number">
        @error('nid')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="trade_licence" for="">Trade Licence<span
                class="required-star"> *</span></label>
        <input id="trade_licence" type="text" required
               class="form-control @error('trade_licence') is-invalid @enderror"
               name="trade_licence"
               value="{{ isset($vendor) ? $vendor->trade_licence : old('trade_licence') }}"
               autocomplete="trade_licence"
               autofocus placeholder="Enter trade licence">
        @error('trade_licence')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="mobile" for="">Mobile Number<span
                class="required-star"> *</span></label>
        <input id="mobile" type="text" required
               class="form-control @error('mobile') is-invalid @enderror"
               name="mobile" value="{{ isset($vendor) ? $vendor->mobile : old('mobile') }}"
               autocomplete="mobile"
               autofocus placeholder="Enter mobile number">
        @error('mobile')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="email" for="">Email<span
                class="required-star"> *</span></label>
        <input id="email" type="text" required
               class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ isset($vendor) ? $vendor->email : old('email') }}"
               autocomplete="email"
               autofocus placeholder="Enter email address">
        @error('email')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="password" for="">Password<span
                class="required-star"> *</span></label>
        <input id="password" type="password" {{ isset($vendor) ? '' : 'required' }}
        class="form-control @error('password') is-invalid @enderror"
               name="password" autocomplete="password"
               autofocus placeholder="Enter password">
        @error('password')
        <span class="help-block m-b-none text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
    </div>
</div>
<div class="col-6">
    <div class="form-group">
        <label id="password_confirmation" for="">Confirm Password<span
                class="required-star"> *</span></label>
        <input id="password_confirmation" type="password" {{ isset($vendor) ? '' : 'required' }}
        class="form-control"
               name="password_confirmation" autocomplete="password_confirmation"
               autofocus placeholder="Enter confirm new password">
    </div>
</div>
<div class="col-12">
    <label>Logo</label>
    <div class="input-group">
        <div class="custom-file">
            <input id="logo" type="file" name="logo"
                   class="custom-file-input">
            <label class="custom-file-label" for="logo">Choose file</label>
        </div>
    </div>
    @error('logo') <span
        class="help-block m-b-none text-danger">{{ @$message }}</span>
    @enderror
</div>
<br>
<div class="col-12 mt-3">
    <div class="form-group">
        <label id="address" class="control-label">Address <span
                class="required-star"> *</span></label>
        <textarea class="form-control" name="address"
                  placeholder="Enter address"
                  id="address">{!! isset($vendor) ? $vendor->address : old('address') !!}</textarea>
        @error('address')
        <span class="help-block m-b-none text-danger">
                                    {{ @$message }}
                                </span>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div>
        <div class="form-group">
            <label>
                <input name="status"
                       {{ isset($vendor) && @$vendor->status ? 'checked':old('status')}} type="checkbox"
                       class="i-checks">
                Publication Status
            </label>
        </div>
    </div>
</div>

