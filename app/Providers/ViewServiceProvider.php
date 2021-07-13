<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\SiteSetting;
use App\Models\Social;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['home'], function ($view) {
            $site_setting = SiteSetting::first();

            $home_page_categories = Category::with(['products' => function ($query) {
                $query->active();
            }])
                ->oldest('serial_no')
                ->take($site_setting->homepage_show_cat_count)
                ->get()
                ->map(function ($category) {
                    return $category->setRelation('products', $category->products->take(12));
                });;

            $view->with('home_page_categories', $home_page_categories);
        });
    }
}
