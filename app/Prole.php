<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prole extends Model
{
    protected $fillable=['id','title'];
    
    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
