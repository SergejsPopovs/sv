<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "news";
    protected $fillable=['id','title','photo_id', 'short_text', 'full_text', 'author'];
    
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
