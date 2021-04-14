<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ProductHelper;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Slider;
use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
