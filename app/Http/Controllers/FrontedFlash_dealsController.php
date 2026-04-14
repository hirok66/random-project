<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedFlash_dealsController extends Controller
{
   public function index(){
        return view('frontend.flash_deals.index');
    }
}
