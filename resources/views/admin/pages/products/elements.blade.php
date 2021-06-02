@push('style')
    <link href="{{ asset('backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/dropzone/basic.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
@endpush

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5> {{ isset($product) ? 'Edit ' : 'Create ' }} a new product</h5>
            </div>
            <div class="ibox-content">
                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label id="name" class="control-label">Name<span
                                    class="required-star"> *</span></label>
                            <input id="name" type="text"
                                   placeholder="Enter name"
                                   value="{{ isset($product->name) ? @$product->name : old('name')}}"
                                   name="name" class="form-control">

                            <small class="text-danger error_msg name_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label id="stock" class="control-label">Quantity <sup></sup></label>
                            <input id="stock"
                                   placeholder="Enter quantity"
                                   type="number"
                                   min="1"
                                   value="{{ isset($product->stock) ? @$product->stock : old('stock')}}"
                                   name="stock"
                                   class="form-control">

                            <small class="text-danger error_msg stock_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Weight<span
                                    class="required-star"> *</span></label>
                            <input id="weight" type="text"
                                   placeholder="Enter weight"
                                   value="{{ isset($product) ? $product->weight : old('weight')}}"
                                   name="weight" class="form-control productPriceInput">

                            <small class="text-danger error_msg weight_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label id="code" class="control-label">Code</label>
                            <input id="code" type="text"
                                   placeholder="Enter code"
                                   value="{{ $product->code ?? old('code')}}"
                                   name="code" class="form-control">

                            <small class="text-danger error_msg code_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label id="price" class="control-label">Price<span
                                    class="required-star"> *</span></label>
                            <input id="price" type="number" min="1"
                                   placeholder="Enter price"
                                   value="{{ $product->price ?? old('price')}}"
                                   name="price" class="form-control productPriceInput">

                            <small class="text-danger error_msg price_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label id="discount_price" class="control-label">Discount Price <sup></sup></label>
                            <input id="discount_price"
                                   placeholder="Enter discount price"
                                   type="text"
                                   value="{{ $product->discount_price ?? old('discount_price')}}"
                                   name="discount_price"
                                   class="form-control">

                            <small class="text-danger error_msg discount_price_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Category<span
                                    class="required-star"> *</span></label>
                            <select class="form-control productCategorySelect2 chosen-select"
                                    name="category_id">
                                <option>Select Category</option>
                                @php($check_selected_id = $product->category_id ?? old('category_id'))
                                @foreach($categories as $category)
                                    <option {{ $check_selected_id == $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            <small class="text-danger error_msg category_id_error"></small>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Brand<span
                                    class="required-star"> *</span></label>
                            <select class="form-control productBrandSelect2" name="brand_id">
                                <option>Select Brand</option>
                                @php($check_selected_id = $product->brand_id ?? old('brand_id'))
                                @foreach($brands as $brand)
                                    <option {{ $check_selected_id == $brand->id ? 'selected' : '' }}
                                            value="{{ $brand->id }}">{{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>

                            <small class="text-danger error_msg brand_id_error"></small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Color</label>
                        <div class="form-group">
                            <input name="color" class="tagsinput form-control" type="text"
                                   value="{{ $product->attributes->color ?? old('color')}}"
                                   placeholder="Enter color name ex. red, green"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Size</label>
                        <div class="form-group">
                            <input name="size" class="tagsinput form-control" type="text"
                                   value="{{ $product->attributes->size ?? old('size')}}"
                                   placeholder="Enter size name ex. small, large"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label id="details" class="control-label">Details</label>
                            <!--<textarea class="form-control productsTextEditor" name="details"></textarea>-->
                            <textarea class="form-control" name="details"
                                      placeholder="Enter details"
                                      rows="4"
                                      id="details">
                                    {!! $product->details ?? old('details') !!}
                                    </textarea>

                            <small class="text-danger error_msg details_error"></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label>Thumbnail <span class="required-star"> *</span></label>
                        <div class="form-group">
                            <div class="myDropZone" id="thumbnailDropZone">
                                <div class="dz-message" data-dz-message>
                                    <span>Upload thumbnail </span>
                                </div>
                            </div>
                            <span id="thumbnailDropZoneError" class="text-danger"></span>
                            <small class="text-danger error_msg thumbnail_error"></small>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <label>Images</label>
                        <div class="form-group">
                            <div class="myDropZone" id="imagesDropZone">
                                <div class="dz-message" data-dz-message>
                                    <span>Drop files here or click to upload</span>
                                </div>
                            </div>
                            <span id="imagesDropZoneError" class="text-danger"></span>
                        </div>
                    </div>
                </div>

                <!--checkbox area-->
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="status">
                                <input type="checkbox"
                                       {{ isset($product) && $product->status || old('status') ? 'checked' : '' }}
                                       id="status"
                                       name="status"
                                       class="i-checks"
                                    {{ !isset($product) ? 'checked' : '' }}>
                                Active
                            </label>

                            <small class="text-danger error_msg status_error"></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if( isset($product) && $product->images->count() > 0)
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Product Images</h5>
                </div>
                <div class="ibox-content">
                    <div class="d-flex flex-wrap">
                        @foreach($product->images as $image)
                            <div id="removeProductImageSection" class="mr-2 mb-3">
                                <img class="d-block b-r-md" height="60px" width="60px"
                                     src="{{ $image->url }}"
                                     alt="{{ $image->type }}">
                                <button onclick="removeProductImage(event, this, '{{ $image->id }}')"
                                        class="btn btn-xs btn-danger btn-block mt-1">
                                    Remove
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!--SEO Fields-->
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Product <strong>SEO Fields</strong></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="meta_title" class="control-label">Meta Title<sup></sup></label>
                            <input id="meta_title"
                                   placeholder="Enter meta title"
                                   type="text"
                                   value="{{ isset($product->seo) ? @$product->seo->meta_title : old('meta_title')}}"
                                   name="meta_title"
                                   class="form-control">
                            @error('meta_title')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="meta_keywords" class="control-label">Meta Keywords<sup></sup></label>
                            <input id="meta_keywords"
                                   placeholder="Enter meta keywords"
                                   type="text"
                                   value="{{ isset($product->seo) ? @$product->seo->meta_keywords : old('meta_keywords')}}"
                                   name="meta_keywords"
                                   class="form-control">
                            @error('meta_keywords')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label id="meta_description" class="control-label">Meta Descriptions</label>
                            {{--                            <textarea class="form-control productsTextEditor" name="details"--}}
                            <textarea class="form-control" name="meta_description"
                                      placeholder="Enter meta descriptions"
                                      id="meta_description">{!! isset($product->seo) ? @$product->seo->meta_description : old('meta_description') !!}</textarea>
                            @error('meta_description')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{ route('admin.products.index') }}" class="btn btn-danger" type="submit">Cancel</a>
<button class="btn btn-primary" type="button" onclick="submitAddProductForm()">
    {{ isset($product) ? 'Update': 'Submit' }}
</button>

@push('script')
    @include('admin.pages.products.admin-product-script')
@endpush

