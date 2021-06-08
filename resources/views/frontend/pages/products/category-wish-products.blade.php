@extends('frontend.layouts.app')

@push('styles')
@endpush

@section('content')
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $category->name }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <!-- Recommendation For You -->
        <div class="container mb-8">
            <div class="mb-6">
                <div
                    class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-sm-bottom-0 mb-4">
                    <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Category wish Products</h3>
                </div>
                <ul class="row list-unstyled products-group no-gutters">
                    @forelse($products as $product)
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a
                                                href="{{ route('product.category', $product->category->slug) }}"
                                                class="font-size-12 text-gray-5">{{ $product->category->name }}</a></div>
                                        <h5 class="mb-1 product-item__title"><a
                                                href="{{ route('product.details', $product->slug) }}"
                                                class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                        <div class="mb-2">
                                            <a href="{{ route('product.details', $product->slug) }}"
                                               class="d-block text-center"><img class="img-fluid"
                                                                                src="{{ $product->images()->first()->url }}"
                                                                                alt="Image Description"></a>

                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100"> {{ getCurrencyIcon() }} {{ $product->price }}</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a  href="{{ route('product.details', $product->slug) }}"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <p class="text-center">No products</p>
                    @endforelse
                </ul>
            </div>
        </div>
        <!-- End Recommendation For You -->
    </main>
@endsection

@push('scripts')
@endpush
