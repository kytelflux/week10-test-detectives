<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detective extends Model
{
    public function detective_image() {
        return $this->belongsToMany('App\Image');
    }
}
