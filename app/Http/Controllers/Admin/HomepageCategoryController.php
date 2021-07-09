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
        $categories = Category::oldest('serial_no')->get();
        $site_setting = SiteSetting::first();

        return view('admin.pages.setting.homepage-category', compact('categories', 'site_setting'));
    }

    public function update(Request $request)
    {
        try {
            $serial = $request->input('serial');

            foreach ($serial as $key => $objValue) {
                Category::find($objValue['id'])->update(['serial_no' => ++$key]);
            }

            return true;
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }
}
