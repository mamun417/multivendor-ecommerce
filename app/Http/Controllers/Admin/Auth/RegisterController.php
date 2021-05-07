<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = route('admin.dashboard');
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'vendor_name'   => ['required', 'string', 'max:255'],
            'name'          => ['required', 'string', 'max:255'],
            'nid'           => ['required', 'string', 'max:255'],
            'trade_licence' => ['required', 'string', 'max:255'],
            'mobile'        => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
            'logo'          => ['nullable', 'image', 'max:10000'],
            'address'       => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = Admin::create([
            'vendor_name'   => $data['vendor_name'],
            'name'          => $data['name'],
            'nid'           => $data['nid'],
            'trade_licence' => $data['trade_licence'],
            'mobile'        => $data['mobile'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'address'       => $data['address'],
            'type'          => 'vendor'
        ]);

        if ($data['logo']) {
            $image_path = FileHandler::upload($data['logo'], 'admin_profile_images', ['width' => '', 'height' => '']);
            $user->image()->create([ // image update
                'url'       => Storage::url($image_path),
                'base_path' => $image_path,
                'type'      => 'vendor_image',
            ]);
        }

        return $user;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }


}
