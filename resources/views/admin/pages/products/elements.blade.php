@push('style')
    <link href="{{ asset('backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
@endpush

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5> {{ isset($product) ? 'Edit ' : 'Create ' }} a new product</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="name" class="control-label">Name<span
                                    class="required-star"> *</span></label>
                            <input id="name" type="text"
                                   placeholder="Enter product name"
                                   value="{{ isset($product->name) ? @$product->name : old('name')}}"
                                   name="name" class="form-control">
                            @error('name')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="stock" class="control-label">Quantity <sup></sup></label>
                            <input id="stock"
                                   placeholder="Enter product quantity"
                                   type="number"
                                   min="1"
                                   value="{{ isset($product->stock) ? @$product->stock : old('stock')}}"
                                   name="stock"
                                   class="form-control">
                            @error('stock')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="price" class="control-label">Weight<span
                                    class="required-star"> *</span></label>
                            <input id="weight" type="text"
                                   placeholder="Enter product weight"
                                   value="{{ isset($product) ? @$product->weight : old('weight')}}"
                                   name="weight" class="form-control productPriceInput">
                            @error('weight')
                            <span class="help-block m-b-none text-danger">
                                 {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="code" class="control-label">Code</label>
                            <input id="code" type="text"
                                   placeholder="Enter product code"
                                   value="{{ isset($product->code) ? @$product->code : old('code')}}"
                                   name="code" class="form-control">
                            @error('code')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="price" class="control-label">Price<span
                                    class="required-star"> *</span></label>
                            <input id="price" type="text"
                                   placeholder="Enter product price"
                                   value="{{ isset($product->price) ? @$product->price : old('price')}}"
                                   name="price" class="form-control productPriceInput">
                            @error('price')
                            <span class="help-block m-b-none text-danger">
                                 {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="discount_price" class="control-label">Discount Price <sup></sup></label>
                            <input id="discount_price"
                                   placeholder="Enter product discount price"
                                   type="text"
                                   value="{{ isset($product->discount_price) ? @$product->discount_price : old('discount_price')}}"
                                   name="discount_price"
                                   class="form-control">
                            @error('discount_price')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Category<span
                                    class="required-star"> *</span></label>
                            <select class="form-control productCategorySelect2 chosen-select"
                                    name="category_id">
                                <option>Select Category</option>
                                @php(@$check_selected_id = isset($product) ? @$product->category_id : old('category_id'))
                                @foreach(@$categories as $category)
                                    <option {{ @$check_selected_id == @$category->id ? 'selected' : '' }}
                                            value="{{ @$category->id }}">{{ @$category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="help-block m-b-none text-danger">{{ @$message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Brand<span
                                    class="required-star"> *</span></label>
                            <select class="form-control productBrandSelect2" name="brand_id">
                                <option>Select Brand</option>
                                @php(@$check_selected_id = isset($product) ? @$product->brand_id : old('brand_id'))
                                @foreach(@$brands as $brand)
                                    <option {{ @$check_selected_id == @$brand->id ? 'selected' : '' }}
                                            value="{{ @$brand->id }}">{{ @$brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                            <span class="help-block m-b-none text-danger">{{ @$message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Images <span class="required-star"> *</span></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input multiple id="inputGroupFile01" type="file" name="product_img[]"
                                       class="custom-file-input">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        @error('product_img') <span
                            class="help-block m-b-none text-danger">{{ @$message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label>Color</label>
                        <div class="input-group">
                            <input name="color" class="tagsinput form-control test-me" type="text"
                                   value="{{ $product->attributes->color ?? old('color')}}"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Size</label>
                        <div class="input-group">
                            <input name="size" class="tagsinput form-control" type="text"
                                   value="{{ $product->attributes->size ?? old('size')}}"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label id="details" class="control-label">Details</label>
                            {{--<textarea class="form-control productsTextEditor" name="details"--}}
                            <textarea class="form-control" name="details"
                                      placeholder="Enter product details"
                                      id="details">
                                {!! isset($product->details) ? @$product->details : old('details') !!}
                            </textarea>
                            @error('details')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>

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
                            @error('status')
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

<!--only edit-->
@if( isset($product) && @$product->images->count() > 0)
    <!-- Start => file upload section -->
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Product Images</h5>
                </div>
                <div class="ibox-content">
                    <div class="d-flex flex-wrap">
                        @foreach($product->images as $image)
                            {{--  for test multiple images design--}}
                            @for($i = 0; $i <10; $i++)
                                <div id="removeProductImageSection" class="mr-2 mb-3">
                                    <img class="d-block b-r-md" height="60px" width="60px"
                                         src="{{ $image->url }}"
                                         alt="{{ $image->type }}">
                                    <button onclick="removeProductImage(event, this, '{{ $image->id }}')"
                                            class="btn btn-xs btn-danger btn-block mt-1">
                                        Remove
                                    </button>
                                </div>
                            @endfor
                        @endforeach
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
                <h5>Product <strong>SEO Fields</strong></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="meta_title" class="control-label">Meta Title<sup></sup></label>
                            <input id="meta_title"
                                   placeholder="Enter product meta title"
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
                                   placeholder="Enter product meta keywords"
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
                                      placeholder="Enter product meta descriptions"
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

@push('script')
    <script src="{{ asset('backend/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script>
        $('.tagsinput').tagsinput({
            tagClass: 'label label-primary',
        });

        $('.bootstrap-tagsinput input').keypress(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
            }
        });
    </script>
@endpush
