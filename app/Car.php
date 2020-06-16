<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use tidy;

class Car extends Model
{
    //
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
