<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.profile.profile');
    }

    public function update(ProfileRequest $request, Admin $admin)
    {
        DB::beginTransaction();
        try {
            $admin->update([
                'name'  => $request->name,
                'email' => $request->email,
            ]);

            if ($request->file('profile_image')) {
                $image      = $request->file('profile_image');
                $image_path = FileHandler::upload($image, 'admin_profile_images', ['width' => '84', 'height' => '84']);

                $data = [
                    'url'       => Storage::url($image_path),
                    'base_path' => $image_path,
                    'type'      => $admin->type . '_logo',
                ];

                if ($admin->image) {
                    FileHandler::delete(@$admin->image->base_path); //image delete
                    $admin->image()->update($data);
                } else {
                    $admin->image()->create($data);
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Profile Update Successfully');
        } catch (\Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function changePassword(PasswordRequest $request): \Illuminate\Http\RedirectResponse
    {
        $hasPassword    = Auth::user()->password;
        $check_password = Hash::check($request->current_password, $hasPassword);

        if ($check_password) {
            $new_password = Hash::make($request->password);

            Auth::user()->update(['password' => $new_password]);

            return redirect()->back()->with('success', 'Password changed successfully');
        } else {
            return redirect()->back()->with('warning', 'Old password dose not match with your current password');
        }
    }
}
