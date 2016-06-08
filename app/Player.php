<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable=['id','name', 'surname', 'email', 'about', 'phone', 'prole_id', 'photo_id'];
    
    public function prole()
    {
        return $this->belongsTo('App\Prole');
    }
    
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
