<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function news()
    {
        return $this->hasMany('App\Article');
    }
}
