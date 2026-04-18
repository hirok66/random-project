<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $guarded = ['id'];

      public function author()
{
    return $this->belongsTo(Gest::class);
}
}
