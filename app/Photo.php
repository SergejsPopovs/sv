<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=['id','title', 'location', 'author', 'about', 'width', 'height'];
    
    public function news()
    {
        return $this->hasMany('App\Article');
        
    }
    
    public function players()
    {
        return $this->hasMany('App\Player');
        
    }
}
