<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedShopdetailsController extends Controller
{
     public function index(){
        return view('frontend.shopdetails.index');
    }
}
