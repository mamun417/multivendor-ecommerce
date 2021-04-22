<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SlidersController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
         ->name('password.request');

    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
         ->name('password.email');

    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
         ->name('password.reset');

    Route::post('password/reset', [ResetPasswordController::class, 'reset'])
         ->name('password.update');
});

Route::group(['middleware' => ['auth:admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    // dashboard v_2
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // profile
    Route::get('profile', [AdminController::class, 'index'])->name('profile');
    Route::patch('profile/{admin}/update', [AdminController::class, 'update'])->name('profile.update');

    // password
    Route::patch('password/change', [AdminController::class, 'changePassword'])->name('password.change');
});

// this controller group only for super-admin who is owner this applications
Route::group(['middleware' => ['auth:admin', 'isSuperAdmin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
//Site Setting
    Route::get('setting', [SiteSettingController::class, 'edit'])->name('setting.edit');

// categories
    Route::resource('categories', CategoryController::class);
    Route::get('categories/change-status/{category}', [CategoryController::class, 'changeStatus'])
         ->name('categories.status.change');

    // sliders
    Route::resource('sliders', SlidersController::class)->except('show');
    Route::get('sliders/change-status/{slider}', [SlidersController::class, 'changeStatus'])
         ->name('sliders.status.change');
});

// this controller group only for vendor
Route::group(['middleware' => ['auth:admin', 'isVendor'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    // brands
    Route::resource('brands', BrandController::class);
    Route::get('brands/change-status/{brand}', [BrandController::class, 'changeStatus'])
         ->name('brands.status.change');

    // products
    Route::resource('products', ProductController::class);
    Route::get('products/change-status/{product}', [ProductController::class, 'changeStatus'])
         ->name('products.status.change');
    Route::get('products/size/remove', [ProductController::class, 'sizeRemove'])->name('products.remove.size');
    Route::get('products/remove/image', [ProductController::class, 'removeProductImage'])->name('products.remove.image');

    // coupons
    Route::resource('coupons', CouponController::class);
    Route::get('coupons/change-status/{product}', [CouponController::class, 'changeStatus'])
         ->name('coupons.status.change');
});









