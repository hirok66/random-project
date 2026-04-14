<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\Villages;
use Illuminate\Http\Request;

class LocationController extends Controller
{


    public function getDivisions()
    {
        return Division::all();
    }

    public function getDistricts($division_id)
    {
        return District::where('division_id', $division_id)->get();
    }

    public function getUpazilas($district_id)
    {
        return Upazila::where('district_id', $district_id)->get();
    }

    public function getUnions($upazila_id)
    {
        return Union::where('upazilla_id', $upazila_id)->get();
    }

    public function getVillages($union_id)
    {
        return Villages::where('union_id', $union_id)->get();
    }

}
