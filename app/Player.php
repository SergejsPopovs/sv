<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function prole()
    {
        return $this->belongsTo('App\Prole');
    }
}
