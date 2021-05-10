<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Http\Requests\VendorRequest;
use App\Models\Admin;
use App\Notifications\ApprovedRejectedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class VendorController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('perPage') ?: 10;
        $keyword = $request->query('keyword');

        //get all slider
        $vendors = Admin::vendor()->latest();

        if ($keyword) {
            $keyword = '%' . $keyword . '%';
            $vendors = $vendors->where('vendor_name', 'like', $keyword)
                ->orWhere('name', 'like', $keyword)
                ->orWhere('email', 'like', $keyword)
                ->orWhere('mobile', 'like', $keyword)
                ->orWhere('nid', 'like', $keyword)
                ->orWhere('trade_licence', 'like', $keyword);
        }

        $vendors = $vendors->paginate($perPage);

        return view('admin.pages.vendors.index', compact('vendors'));
    }

    public function create()
    {
        return view('admin.pages.vendors.create');
    }

    public function store(VendorRequest $request)
    {
        $user = Admin::create([
            'name'          => $request->input('name'),
            'vendor_name'   => $request->input('vendor_name'),
            'nid'           => $request->input('nid'),
            'trade_licence' => $request->input('trade_licence'),
            'mobile'        => $request->input('mobile'),
            'email'         => $request->input('email'),
            'password'      => Hash::make($request->input('password')),
            'address'       => $request->input('address'),
            'type'          => 'vendor',
            'status'        => (bool)$request->input('status'),
        ]);

        if (isset($data['logo'])) {
            $image_path = FileHandler::upload($data['logo'], 'admin_profile_images', ['width' => '', 'height' => '']);
            $user->image()->create([ // image update
                'url'       => Storage::url($image_path),
                'base_path' => $image_path,
                'type'      => 'vendor_logo',
            ]);
        }

        return redirect()->back()->with('success', 'Registration successfully complete as a vendor');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Admin::vendor()->findOrFail($id);

        dd($vendor);
    }

    public function edit($id)
    {
        $vendor = Admin::vendor()->findOrFail($id);

        return view('admin.pages.vendors.edit', compact('vendor'));
    }

    public function update(Request $request, $id)
    {
        $vendor = Admin::vendor()->findOrFail($id);

        $vendor->update([
            'name'          => $request->input('name'),
            'vendor_name'   => $request->input('vendor_name'),
            'nid'           => $request->input('nid'),
            'trade_licence' => $request->input('trade_licence'),
            'mobile'        => $request->input('mobile'),
            'email'         => $request->input('email'),
            'password'      => $request->input('password') ? Hash::make($request->input('password')) : $vendor->password,
            'address'       => $request->input('address'),
            'type'          => 'vendor',
            'status'        => (bool)$request->input('status'),
        ]);

        if ($request->file('logo')) {
            $image      = $request->file('logo');
            $image_path = FileHandler::upload($image, 'admin_profile_images', ['width' => '84', 'height' => '84']);

            $data = [
                'url'       => Storage::url($image_path),
                'base_path' => $image_path,
                'type'      => 'vendor_logo',
            ];

            if ($vendor->image) {
                FileHandler::delete(@$vendor->image->base_path); //image delete
                $vendor->image()->update($data);
            } else {
                $vendor->image()->create($data);
            }
        }

        return redirect()->back()->with('success', 'Vendor information successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus(Admin $admin): \Illuminate\Http\JsonResponse
    {
        $admin->update(['status' => !$admin->status]);

        if ($admin->status) {
            $data = [
                'subject' => 'Approved your request as  a vendor',
                'message' => 'We have reviewed all your information. Hope you have given all the information correctly. From now on you are an approved user in our application.',
            ];
        } else {
            $data = [
                'subject' => 'Rejected your permission',
                'message' => 'Thank you so much for using our apps but recently we noticed that you did not maintain our Rules and Regulations. You are no longer allowed to use the application temporarily. If you have any questions you can contact the admin',
            ];
        }

        Notification::send($admin, new ApprovedRejectedNotification($data));

        return response()->json(['status' => true]);
    }
}
