<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AboutUSVideo;
use App\Models\about_us_text;
use App\Models\Brand;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // index

   public function index() {
    // Get the single latest record
    $aboutus = AboutUs::latest()->first();
    $videos = AboutUSVideo::latest()->first();
    $brands = Brand::where('status','active')->get();

   $aboutUsTexts = about_us_text::where('status', 'active')
    ->latest()
    ->take(4)
    ->get();


    return view('frontend.about.index', [
        'aboutus' => $aboutus,
        'aboutUsTexts' => $aboutUsTexts,
        'videos' => $videos,
        'brands' => $brands,
    ]);
}

}
