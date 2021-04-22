<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Http\Requests\SiteSettingRequest;
use App\Models\SiteSetting;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class SiteSettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function edit(): View
    {
        $setting = SiteSetting::with('image')->where('id', 1)->first();

        return view('admin.pages.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteSettingRequest $request
     * @param SiteSetting        $siteSetting
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(SiteSettingRequest $request, SiteSetting $siteSetting): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $siteSetting->update([
                'phone'   => $request->input('phone'),
                'email'   => $request->input('email'),
                'address' => $request->input('address'),
            ]);

            if ($request->file('image')) {
                $image      = $request->file('image');
                $image_name = FileHandler::upload($image, 'logo', ['width' => '100', 'height' => '250']);

                FileHandler::delete($siteSetting->image->base_path);
            } else {
                $image_name = $siteSetting->image->base_path;
            }

            $siteSetting->image()->update([
                'url'       => Storage::url($image_name),
                'base_path' => $image_name,
                'type'      => 'logo',
            ]);

            DB::commit();

            return redirect()->route('admin.brands.index')->with('success', 'Brand Updated Successfully');
        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SiteSetting $siteSetting
     * @return Response
     */
    public function destroy(SiteSetting $siteSetting)
    {
        //
    }
}
