<?php

namespace App\Models;

use App\Models\District;
use App\Models\Division;
use App\Models\Gest;
use App\Models\Union;
use App\Models\Upazila;
use Illuminate\Database\Eloquent\Model;

class GestAddress extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(Gest::class,'author_id');
    }
    public function dividion(){
        return $this->belongsTo(Division::class,'division_id');
    }
    public function district(){
        return $this->belongsTo(District::class,'district_id');

}
    public function upazila(){
        return $this->belongsTo(Upazila::class,'upazilla_id');
    }
    public function union(){
        return $this->belongsTo(Union::class,'union_id');
    }
}
