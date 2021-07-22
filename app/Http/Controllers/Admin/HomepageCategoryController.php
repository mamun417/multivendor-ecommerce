<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomepageCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->withCount(['products as active_products_count' => function ($query) {
                $query->active();
            }])
            ->withCount(['products as inactive_products_count' => function ($query) {
                $query->inActive();
            }])
            ->oldest('serial_no')->get();

        $site_setting = SiteSetting::first();

        return view('admin.pages.setting.homepage-category', compact('categories', 'site_setting'));
    }

    public function update(Request $request)
    {
        try {
            $serial = array_map(function ($serial) {
                return $serial['id'];
            }, $request->input('serial'));

            Category::chunkById(200, function ($categories) use ($serial) {
                $categories->each(function ($category) use ($serial) {
                    $category->update(['serial_no' => array_search($category->id, $serial)]);
                });
            }, $column = 'id');

            return true;
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }

    public function updateHomepageShowCatCount(Request $request): \Illuminate\Http\JsonResponse
    {
        $site_setting = SiteSetting::first();

        $updated_setting = $site_setting->update([
            'homepage_show_cat_count' => $request->input('homepage_show_cat_count'),
        ]);

        return response()->json(['setting' => $updated_setting]);
    }
}
