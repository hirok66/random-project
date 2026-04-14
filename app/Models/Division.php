<?php

namespace App\Models;

use App\Models\District;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'name',
        'bn_name',
        'url'
    ];

    // 🔗 One Division has many Districts
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
