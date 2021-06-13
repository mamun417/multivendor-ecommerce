<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('product-belongs-to-user', function (Admin $admin, Product $product) {
            return $admin->id === $product->admin_id;
        });

        Gate::define('coupon-belongs-to-user', function (Admin $admin, Coupon $coupon) {
            return $admin->id === $coupon->admin_id;
        });
    }
}
