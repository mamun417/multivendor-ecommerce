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
                            <label id="product_name" class="control-label">Name<span
                                    class="required-star"> *</span></label>
                            <input id="product_name" type="text"
                                   placeholder="Enter product name"
                                   value="{{ isset($product->name) ? @$product->name : old('product_name')}}"
                                   name="product_name" class="form-control">
                            @error('product_name')
                            <span class="help-block m-b-none text-danger">
                                                {{ @$message }}
                                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="product_stock" class="control-label">Quantity <sup></sup></label>
                            <input id="product_stock"
                                   placeholder="Enter product quantity"
                                   type="number"
                                   min="1"
                                   value="{{ isset($product->stock) ? @$product->stock : old('product_stock')}}"
                                   name="product_stock"
                                   class="form-control">
                            @error('product_stock')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="product_price" class="control-label">Weight<span
                                    class="required-star"> *</span></label>
                            <input id="product_weight" type="text"
                                   placeholder="Enter product weight"
                                   value="{{ isset($product) ? @$product->weight : old('product_weight')}}"
                                   name="product_weight" class="form-control productPriceInput">
                            @error('product_weight')
                            <span class="help-block m-b-none text-danger">
                                 {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="product_code" class="control-label">Code</label>
                            <input id="product_code" type="text"
                                   placeholder="Enter product code"
                                   value="{{ isset($product->code) ? @$product->code : old('product_code')}}"
                                   name="product_code" class="form-control">
                            @error('product_code')
                            <span class="help-block m-b-none text-danger">
                                {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="product_price" class="control-label">Price<span
                                    class="required-star"> *</span></label>
                            <input id="product_price" type="text"
                                   placeholder="Enter product price"
                                   value="{{ isset($product->price) ? @$product->price : old('product_price')}}"
                                   name="product_price" class="form-control productPriceInput">
                            @error('product_price')
                            <span class="help-block m-b-none text-danger">
                                 {{ @$message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="product_discount_price" class="control-label">Discount Price <sup></sup></label>
                            <input id="product_discount_price"
                                   placeholder="Enter product discount price"
                                   type="text"
                                   value="{{ isset($product->discount_price) ? @$product->discount_price : old('product_discount_price')}}"
                                   name="product_discount_price"
                                   class="form-control">
                            @error('product_discount_price')
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
                                    name="category">
                                <option>Select Category</option>
                                @php(@$check_selected_id = isset($product) ? @$product->category_id : old('category'))
                                @foreach(@$categories as $category)
                                    <option {{ @$check_selected_id == @$category->id ? 'selected' : '' }}
                                            value="{{ @$category->id }}">{{ @$category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="help-block m-b-none text-danger">{{ @$message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Brand<span
                                    class="required-star"> *</span></label>
                            <select class="form-control productBrandSelect2" name="brand">
                                <option>Select Brand</option>
                                @php(@$check_selected_id = isset($product) ? @$product->brand_id : old('brand'))
                                @foreach(@$brands as $brand)
                                    <option {{ @$check_selected_id == @$brand->id ? 'selected' : '' }}
                                            value="{{ @$brand->id }}">{{ @$brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand')
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label id="product_details" class="control-label">Details</label>
                            {{--                            <textarea class="form-control productsTextEditor" name="product_details"--}}
                            <textarea class="form-control" name="product_details"
                                      placeholder="Enter product details"
                                      id="product_details">{!! isset($product->details) ? @$product->details : old('product_details') !!}</textarea>
                            @error('product_details')
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
                                       {{ isset($product) && @$product->status || old('status') ? 'checked' : '' }}
                                       id="status"
                                       name="status"
                                       class="i-checks">

                                Active</label>
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

<!--// only edit-->
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
                                            <button onclick="removeProductImage(event, this, '{{ @$image->id }}')"
                                                    class="btn btn-danger btn-block">Remove
                                            </button>
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
                            {{--                            <textarea class="form-control productsTextEditor" name="product_details"--}}
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
