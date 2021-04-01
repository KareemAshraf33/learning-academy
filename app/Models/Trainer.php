<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded = ['id'];
    
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
