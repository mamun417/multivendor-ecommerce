@extends('frontend.layouts.app')

@push('styles')
@endpush

@section('content')
    <main id="content" role="main">
        <!-- Slider Section -->
        <div class="mb-4">
            <div class="bg-img-hero"
                 style="background-image: url({{ asset('frontend/assets/img/1920X422/img1.jpg') }});">
                <div class="container min-height-438 overflow-hidden">
                    <div class="js-slick-carousel u-slick"
                         data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-2 pl-xl-16 pl-wd-13">
                        <div class="js-slide">
                            <div class="row min-height-438 pt-7 py-md-0">
                                <div class="d-none d-xl-block col-auto">
                                    <div class="max-width-270 min-width-270"></div>
                                </div>
                                <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                    <div class="ml-xl-4">
                                        <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                            data-scs-animation-in="fadeInUp">
                                            SHOP TO GET WHAT YOU LOVE
                                        </h6>
                                        <h1 class="font-size-46 text-lh-50 font-weight-light mb-6"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">
                                            TIMEPIECES THAT MAKE A STATEMENT UP TO
                                            <stong class="font-weight-bold">40% OFF</stong>
                                        </h1>
                                        <a href="{{ url('single-product-full-width') }}"
                                           class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                        <a href="{{ url('single-product-full-width') }}"
                                           class="btn btn-primary transition-3d-hover rounded-lg  py-2 px-md-7 px-3 font-size-16"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="300">
                                            Start Buying
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-6 d-flex align-items-end ml-auto ml-md-0"
                                     data-scs-animation-in="fadeInUp"
                                     data-scs-animation-delay="500">
                                    <img class="img-fluid ml-auto mr-5"
                                         src="{{ asset('frontend/assets/img/374X386/img1.png') }}"
                                         alt="Image Description">
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="row min-height-438 pt-7 py-md-0">
                                <div class="d-none d-xl-block col-auto">
                                    <div class="max-width-270 min-width-270"></div>
                                </div>
                                <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                    <div class="ml-xl-4">
                                        <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                            data-scs-animation-in="fadeInUp">
                                            SHOP TO GET WHAT YOU LOVE
                                        </h6>
                                        <h1 class="font-size-46 text-lh-50 font-weight-light mb-6"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">
                                            TIMEPIECES THAT MAKE A STATEMENT UP TO
                                            <stong class="font-weight-bold">40% OFF</stong>
                                        </h1>
                                        <a href="{{ url('single-product-full-width') }}"
                                           class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                        <a href="{{ url('single-product-full-width') }}"
                                           class="btn btn-primary transition-3d-hover rounded-lg  py-2 px-md-7 px-3 font-size-16"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="300">
                                            Start Buying
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-6 flex-horizontal-center ml-auto ml-md-0"
                                     data-scs-animation-in="fadeInRight"
                                     data-scs-animation-delay="500">
                                    <img class="img-fluid ml-auto mr-5 h-100"
                                         src="{{ asset('frontend/assets/img/416X420/img1.png') }}"
                                         alt="Image Description">
                                </div>
                            </div>
                        </div>
                        <div class="js-slide">
                            <div class="row min-height-438 pt-7 py-md-0">
                                <div class="d-none d-xl-block col-auto">
                                    <div class="max-width-270 min-width-270"></div>
                                </div>
                                <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                    <div class="ml-xl-4">
                                        <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                            data-scs-animation-in="fadeInUp">
                                            SHOP TO GET WHAT YOU LOVE
                                        </h6>
                                        <h1 class="font-size-46 text-lh-50 font-weight-light mb-6"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">
                                            TIMEPIECES THAT MAKE A STATEMENT UP TO
                                            <stong class="font-weight-bold">40% OFF</stong>
                                        </h1>
                                        <a href="{{ url('single-product-full-width') }}"
                                           class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="300">
                                            Start Buying
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-6 flex-horizontal-center ml-auto ml-md-0"
                                     data-scs-animation-in="fadeInRight"
                                     data-scs-animation-delay="500">
                                    <img class="img-fluid ml-auto mr-5 h-100"
                                         src="{{ asset('frontend/assets/img/416X420/img3.png') }}"
                                         alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Section -->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-wd-auto d-none d-xl-block">
                    <div class="max-width-270 min-width-270 pt-xl-13 mt-xl-13">
                        <!-- Image Banner -->
                        <aside class="mb-8">
                            <a href="{{ url('shop') }}" class="d-block">
                                <img class="img-fluid"
                                     src="{{ asset('frontend/assets/img/270X428/img1.jpg') }}"
                                     alt="Image Description">
                            </a>
                        </aside>
                        <!-- End Image Banner -->
                        <!-- Latest Products -->
                        <aside class="mb-4">
                            <!-- Wrapper Latest Products -->
                            <div class="mb-2 position-relative">
                                <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                                    <h3 class="section-title section-title__sm mb-0 pb-3 font-size-18">Latest
                                        Products</h3>
                                </dv>
                                <div
                                    class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 position-static"
                                    data-slides-show="1"
                                    data-slides-scroll="1"
                                    data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                    data-arrow-left-classes="fa fa-angle-left right-1"
                                    data-arrow-right-classes="fa fa-angle-right right-0">
                                    <div class="js-slide">
                                        <ul class="list-unstyled products-group mb-0 overflow-visible">
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img1.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Tablet Air 3 WiFi 64GB
                                                                        Gold</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $629,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img2.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Tablet White EliteBook
                                                                        Revolve
                                                                        810 G2</a></h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $1 299,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img3.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Pendrive USB 3.0 Flash 64
                                                                        GB</a></h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img7.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">White Solo 2 Wireless</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img4.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Smartwatch 2.0 LTE Wifi</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="js-slide">
                                        <ul class="list-unstyled products-group mb-0 overflow-visible">
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img7.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">White Solo 2 Wireless</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img4.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Smartwatch 2.0 LTE Wifi</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img5.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Gear Virtual Reality</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $799,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend/assets/img/150X140/img6.jpg') }}"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">External SSD USB 3.1 750
                                                                        GB</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $799,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div class="product-item__inner py-md-3 mx-3 row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img8.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Purple NX Mini F1 aparat
                                                                        SMART
                                                                        NX</a></h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $559.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="js-slide">
                                        <ul class="list-unstyled products-group mb-0 overflow-visible">
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img1.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Tablet Air 3 WiFi 64GB
                                                                        Gold</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $629,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img2.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Tablet White EliteBook
                                                                        Revolve
                                                                        810 G2</a></h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $1 299,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img3.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Pendrive USB 3.0 Flash 64
                                                                        GB</a></h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img7.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">White Solo 2 Wireless</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                <div class="product-item__outer h-100">
                                                    <div
                                                        class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                        <div class="col-auto product-media-left">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="max-width-70 d-block"><img class="img-fluid"
                                                                                                 src="{{ asset('frontend') }}/assets/img/150X140/img4.jpg"
                                                                                                 alt="Image Description"></a>
                                                        </div>
                                                        <div class="col product-item__body pl-2 pl-lg-3">
                                                            <div class="mb-4">
                                                                <h5 class="product-item__title"><a
                                                                        href="{{ url('single-product-full-width') }}"
                                                                        class="text-gray-90">Smartwatch 2.0 LTE Wifi</a>
                                                                </h5>
                                                            </div>
                                                            <div class="flex-center-between">
                                                                <div class="prodcut-price">
                                                                    <div
                                                                        class="text-gray-100 font-size-15 font-weight-bold">
                                                                        $110,00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Wrapper Latest Products -->
                        </aside>
                        <!-- End Latest Products -->
                        <!-- Feature List -->
                        <aside class="mb-8">
                            <div class="d-flex justify-content-center rounded border mb-4">
                                <div class="px-4 py-6 w-100">
                                    <!-- Feature List -->
                                    <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                        <div class="u-avatar mr-2">
                                            <i class="text-primary ec ec-transport font-size-46"></i>
                                        </div>
                                        <div class="media-body text-center">
                                            <span class="d-block font-weight-bold text-dark">Free Delivery</span>
                                            <div class=" text-secondary">from $50</div>
                                        </div>
                                    </div>
                                    <!-- End Feature List -->

                                    <!-- Feature List -->
                                    <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                        <div class="u-avatar mr-2">
                                            <i class="text-primary ec ec-customers font-size-56"></i>
                                        </div>
                                        <div class="media-body text-center">
                                            <span class="d-block font-weight-bold text-dark">99 % Customer</span>
                                            <div class=" text-secondary">Feedbacks</div>
                                        </div>
                                    </div>
                                    <!-- End Feature List -->

                                    <!-- Feature List -->
                                    <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                        <div class="u-avatar mr-2">
                                            <i class="text-primary ec ec-returning font-size-46"></i>
                                        </div>
                                        <div class="media-body text-center">
                                            <span class="d-block font-weight-bold text-dark">365 Days</span>
                                            <div class=" text-secondary">for free return</div>
                                        </div>
                                    </div>
                                    <!-- End Feature List -->

                                    <!-- Feature List -->
                                    <div class="media px-3 mb-4 pb-4 border-bottom" href="#">
                                        <div class="u-avatar mr-2">
                                            <i class="text-primary ec ec-payment font-size-46"></i>
                                        </div>
                                        <div class="media-body text-center">
                                            <span class="d-block font-weight-bold text-dark">Payment</span>
                                            <div class=" text-secondary">Secure System</div>
                                        </div>
                                    </div>
                                    <!-- End Feature List -->

                                    <!-- Feature List -->
                                    <div class="media px-3" href="#">
                                        <div class="u-avatar mr-2">
                                            <i class="text-primary ec ec-tag font-size-46"></i>
                                        </div>
                                        <div class="media-body text-center">
                                            <span class="d-block font-weight-bold text-dark">Only Best</span>
                                            <div class=" text-secondary">Brands</div>
                                        </div>
                                    </div>
                                    <!-- End Feature List -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Feature List -->
                        <!-- Feature Product -->
                        <aside class="mb-8">
                            <!-- Featured Products -->
                            <div class="position-relative">
                                <div class="border-bottom border-color-1 mb-2">
                                    <h3 class="section-title mb-0 pb-3 font-size-18">Featured Products</h3>
                                </div>
                                <div
                                    class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble"
                                    data-slides-show="1"
                                    data-slides-scroll="1"
                                    data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                    data-arrow-left-classes="fa fa-angle-left right-1"
                                    data-arrow-right-classes="fa fa-angle-right right-0">
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img2.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img3.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img4.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img5.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img6.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img7.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-slide products-group">
                                        <div class="product-item remove-divider text-center">
                                            <div class="product-item__outer h-100">
                                                <div
                                                    class="product-item__inner remove-prodcut-hover px-wd-4 p-2 p-md-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2">
                                                            <a href="{{ url('single-product-full-width') }}"
                                                               class="d-block text-center"><img class="img-fluid"
                                                                                                src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                                alt="Image Description"></a>
                                                        </div>
                                                        <div class="mb-2"><a
                                                                href="{{ url('product-categories-7-column-full-width') }}"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-4 product-item__title"><a
                                                                href="{{ url('single-product-full-width') }}"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Featured Products -->
                        </aside>
                        <!-- End Feature Product -->
                        
                    </div>
                </div>
                <div class="col-xl-9 col-wd-auto max-width-1130">
                    <!-- Banner -->
                    <div class="row mb-6">
                        <div class="col-md-6 mb-4 mb-xl-0 col-wd-4">
                            <a href="{{ url('shop') }}" class="d-black text-gray-90">
                                <div class="min-height-166 py-1 py-xl-2 py-wd-4 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-7 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/246X176/img1.jpg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                    <span class="link__icon-inner"><i
                                                            class="ec ec-arrow-right-categproes"></i></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-wd-4">
                            <a href="{{ url('shop') }}" class="d-black text-gray-90">
                                <div class="min-height-166 py-1 py-xl-2 py-wd-4 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-7 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/246X176/img2.jpg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                    <span class="link__icon-inner"><i
                                                            class="ec ec-arrow-right-categproes"></i></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-wd-4 d-md-none d-wd-block">
                            <a href="{{ url('shop') }}" class="d-black text-gray-90">
                                <div class="min-height-166 py-1 py-xl-2 py-wd-4 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-7 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/img/246X176/img3.jpg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-5 col-wd-6 pr-xl-4 pr-wd-3">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                    <span class="link__icon-inner"><i
                                                            class="ec ec-arrow-right-categproes"></i></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Banner -->

                    <!-- Mobile & Gadgets -->
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Mobile & Gadgets</h3>
                        </div>
                        <div
                            class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img2.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img3.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img4.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img5.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img6.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img7.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mobile & Gadgets -->

                    <!-- Home Appliances -->
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Home Appliances</h3>
                        </div>
                        <div
                            class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img2.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img3.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img4.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img5.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img6.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img7.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Home Appliances -->

                    <!-- Fashion Accessories -->
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Fashion Accessories</h3>
                        </div>
                        <div
                            class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img2.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img3.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img4.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img5.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img6.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img7.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Fashion Accessories -->

                    <!-- Health & Beauty -->
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Health & Beauty</h3>
                        </div>
                        <div
                            class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img2.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img3.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img4.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img5.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img6.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img7.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Health & Beauty -->

                    <!-- Bikes & Car -->
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Bikes & Car</h3>
                        </div>
                        <div
                            class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="5"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                                  "breakpoint": 1400,
                                  "settings": {
                                    "slidesToShow": 4
                                  }
                                }, {
                                    "breakpoint": 1200,
                                    "settings": {
                                      "slidesToShow": 3
                                    }
                                }, {
                                  "breakpoint": 992,
                                  "settings": {
                                    "slidesToShow": 3
                                  }
                                }, {
                                  "breakpoint": 768,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }, {
                                  "breakpoint": 554,
                                  "settings": {
                                    "slidesToShow": 2
                                  }
                                }]'>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img2.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img3.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img4.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img5.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img6.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img7.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ url('product-categories-7-column-full-width') }}"
                                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ url('single-product-full-width') }}"
                                                        class="text-blue font-weight-bold">Wireless Audio System
                                                        Multiroom
                                                        360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ url('single-product-full-width') }}"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="{{ asset('frontend') }}/assets/img/212X200/img1.jpg"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{ url('single-product-full-width') }}"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{ url('compare') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Bikes & Car -->
                </div>
            </div>
        </div>
        <!-- Brand Carousel -->
        <div class="container mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                     data-slides-show="5"
                     data-slides-scroll="1"
                     data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                     data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                     data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                     data-responsive='[{
                            "breakpoint": 992,
                            "settings": {
                                "slidesToShow": 2
                            }
                        }, {
                            "breakpoint": 768,
                            "settings": {
                                "slidesToShow": 1
                            }
                        }, {
                            "breakpoint": 554,
                            "settings": {
                                "slidesToShow": 1
                            }
                        }]'>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50"
                                 src="{{ asset('frontend') }}/assets/img/200X60/img1.png"
                                 alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50"
                                 src="{{ asset('frontend') }}/assets/img/200X60/img2.png"
                                 alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50"
                                 src="{{ asset('frontend') }}/assets/img/200X60/img3.png"
                                 alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50"
                                 src="{{ asset('frontend') }}/assets/img/200X60/img4.png"
                                 alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50"
                                 src="{{ asset('frontend') }}/assets/img/200X60/img5.png"
                                 alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50"
                                 src="{{ asset('frontend') }}/assets/img/200X60/img6.png"
                                 alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->
    </main>
@endsection

@push('scripts')
@endpush
