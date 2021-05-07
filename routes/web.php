<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Route::post('registration', [RegisterController::class, 'register'])->name('register');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/single-product-full-width', function () {
    return view('frontend.pages.single-product-full-width');
});

Route::get('/shop', function () {
    return view('frontend.pages.shop');
});

Route::get('/product-categories-7-column-full-width', function () {
    return view('frontend.pages.product-categories-7-column-full-width');
});

Route::get('/single-blog', function () {
    return view('frontend.pages.single-blog-post');
});

Route::get('/compare', function () {
    return view('frontend.pages.compare');
});

Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
});

Route::get('/blog-v2', function () {
    return view('frontend.pages.blog-v2');
});

Route::get('/faq', function () {
    return view('frontend.pages.faq');
});
Route::get('/store-directory', function () {
    return view('frontend.pages.store-directory');
});
Route::get('/terms-and-conditions', function () {
    return view('frontend.pages.terms-and-conditions');
});

Route::get('/404', function () {
    return view('frontend.pages.404');
});

Route::get('/shop-grid', function () {
    return view('frontend.pages.shop-grid');
});
Route::get('/shop-grid-extended', function () {
    return view('frontend.pages.shop-grid-extended');
});

Route::get('/shop-list-view', function () {
    return view('frontend.pages.shop-list-view');
});

Route::get('/shop-list-view-small', function () {
    return view('frontend.pages.shop-list-view-small');
});

Route::get('/shop-left-sidebar', function () {
    return view('frontend.pages.shop-left-sidebar');
});

Route::get('/shop-full-width', function () {
    return view('frontend.pages.shop-full-width');
});

Route::get('/shop-right-sidebar', function () {
    return view('frontend.pages.shop-right-sidebar');
});


Route::get('/cart', function () {
    return view('frontend.pages.cart');
});
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
});
Route::get('/my-account', function () {
    return view('frontend.pages.my-account');
});

Route::get('/track-your-order', function () {
    return view('frontend.pages.track-your-order');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/contact-v2', function () {
    return view('frontend.pages.contact-v2');
});



Route::group(['middleware' => ['auth', 'cartExist']], function () {
    Route::get('cart/order', [CartController::class, 'gotToOrderPage'])->name('cart.order.page');

    // Order Routes
    Route::post('cart/order/submit', [OrderController::class, 'orderSubmit'])->name('cart.order.store');
});

Route::group(['middleware' => ['auth']], function () {
    // Order Routes
    Route::get('orders', [OrderController::class, 'orders'])->name('client.orders');
    Route::get('payment/{order}', [OrderController::class, 'paymentPage'])->name('payment.page');
    Route::post('order/cancel/{order}', [OrderController::class, 'orderCancel'])->name('order.cancel');

    // User Dashboard Route
    Route::get('user/profile', [UserProfileController::class, 'edit'])->name('user.profile');
    Route::put('user/profile/update', [UserProfileController::class, 'update'])->name('user.update.profile');
    Route::put('user/profile/update/password', [UserProfileController::class, 'changePassword'])->name('user.update.profile.password');

});

// For Admin
require __DIR__ . '/admin.php';
