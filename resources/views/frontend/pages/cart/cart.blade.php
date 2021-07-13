@extends('frontend.layouts.app')

@push('styles')
@endpush

@section('content')
    <main id="content" role="main" class="cart-page">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cart
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mb-4">
                <h1 class="text-center">Cart</h1>
            </div>
            <div class="mb-10 cart-table">
                <form class="mb-4" action="#" method="post">
                    <table class="table" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-name">Size</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity w-lg-15">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cart_products as $product)
                            <tr class="">
                                <td class="text-center">
                                    <a href="{{ route('cart.remove', @$product->rowId) }}" type="button"
                                       class="text-gray-32 font-size-26">
                                        x
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a href="#">
                                        <img class="img-fluid max-width-100 p-1 border border-color-1"
                                             src="{{ @$product->options['image'] }}"
                                             alt="Image Description">
                                    </a>
                                </td>

                                <td data-title="Product">
                                    <a href="#" class="text-gray-90">{{ $product->name }}</a>
                                </td>

                                <td data-title="Product">
                                    <a href="#" class="text-gray-90">{{ $product->options['size'] }}</a>
                                </td>

                                <td data-title="Price">
                                    <span class="">{{ getCurrencyIcon() }} {{ $product->price }}</span>
                                </td>

                                <td data-title="Quantity">
                                    <span class="sr-only">Quantity</span>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input
                                                    min="1"
                                                    id="{{ $product->rowId }}"
                                                    class="js-result form-control h-auto border-0 rounded p-0 shadow-none"
                                                    type="text" value="{{ $product->qty }}">
                                            </div>
                                            <div class="col-auto pr-1">
                                                <a onclick="minusQty('{{ $product->rowId }}')"
                                                   class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0"
                                                   href="javascript:">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <a onclick="plusQty('{{ $product->rowId }}')"
                                                   class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0"
                                                   href="javascript:">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </td>

                                <td data-title="Total">
                                    <span class="">{{ getCurrencyIcon() }} {{ $product->price * $product->qty }}</span>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center">No products</p>
                        @endforelse
                        <tr>
                            <td colspan="6" class="border-top space-top-2 justify-content-center">
                                <div class="pt-md-3">
                                    <div class="d-block d-md-flex flex-center-between">
                                        <div class="mb-3 mb-md-0 w-xl-40">
                                            <!-- Apply coupon Form -->
                                            <label class="sr-only" for="coupon">Coupon
                                                code</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="coupon"
                                                       id="coupon" placeholder="Coupon code"
                                                       aria-label="Coupon code" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-block btn-dark px-4" type="button"><i
                                                            class="fas fa-tags d-md-none"></i><span
                                                            class="d-none d-md-inline apply_coupon_btn">Apply coupon</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Apply coupon Form -->
                                        </div>
                                        <div class="d-md-flex">
                                            <a href="{{ route('home') }}"
                                               class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">
                                                Continue to Shopping
                                            </a>
                                            <a href="{{ route('checkout') }}"
                                               class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block">Proceed
                                                to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="mb-8 cart-total">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                        <div class="border-bottom border-color-1 mb-3">
                            <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Cart totals</h3>
                        </div>
                        <table class="table mb-3 mb-md-0">
                            <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td data-title="Subtotal"><span
                                        class="amount">{{ getCurrencyIcon() }} {{ Cart::instance('cart')->subtotalFloat() }}</span>
                                </td>
                            </tr>
                            @if(Session::get('coupon'))
                                @php
                                    $coupon = \App\Models\Coupon::where('code', Session::get('coupon'))->first();
                                    $coupon_amount = $coupon->apply_type ? $coupon->amount : ($coupon->amount/100)* Cart::instance('cart')->subtotalFloat();
                                @endphp
                                <tr class="shipping">
                                    <th>Coupon</th>
                                    <td data-title="Shipping">
                                        <span class="amount">{{ getCurrencyIcon() }} {{ $coupon_amount }}</span>
                                    </td>
                                </tr>
                            @endif
                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Total"><strong><span
                                            class="amount">{{getCurrencyIcon()}} {{ Cart::instance('cart')->totalFloat() -  @$coupon_amount }}</span></strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('checkout') }}"
                           class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        function minusQty(rowId) {
            let oldQty = document.getElementById(rowId)
            console.log(oldQty)
            parseInt(oldQty.value--)
            cartUpdate(oldQty.value, rowId)
        }

        function plusQty(rowId) {
            let oldQty = document.getElementById(rowId)
            parseInt(oldQty.value++)
            cartUpdate(oldQty.value, rowId)
        }

        function cartUpdate(value, rowId) {
            var url = "{{ route('cart.update.qty', ":rowId") }}";
            url = url.replace(':rowId', rowId);
            $.post(url, {
                _token: $('meta[name=csrf-token]').attr('content'),
                qty: value
            }, function (res) {
                if (res.success) {
                    toastr.success(res.message)
                    setTimeout(function () {
                        location.reload()
                    }, 300)
                } else {
                    toastr.error(res.message)
                    setTimeout(function () {
                        location.reload()
                    }, 300)
                }
            })
        }


        $(document).ready(function () {
            $(".apply_coupon_btn").on('click', function () {
                let coupon = document.getElementById('coupon').value
                $.post("{{ route('cart.apply.coupon') }}", {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    coupon: coupon
                }, function (res) {
                    if (res.success) {
                        toastr.success(res.message)
                        setTimeout(function () {
                            location.reload()
                        }, 300)
                    } else {
                        toastr.error(res.message)
                        setTimeout(function () {
                            location.reload()
                        }, 300)
                    }
                })
            })
        })

    </script>
@endpush
