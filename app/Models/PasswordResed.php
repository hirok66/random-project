<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResed extends Model
{
    protected $fillable = [
        'email',
        'token',
    ];
}
