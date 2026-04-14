<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = ['id'];     public function category()
    {
        return $this->belongsTo(Category::class);


    }
          public function categroy()
{
    return $this->belongsTo(Category::class);
}
}
