<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $brands= Brand::where('status', 'active')->latest()->paginate('24');
        return view('frontend.brand.index',[
            'brands'=>$brands,
        ]);
    }
}
