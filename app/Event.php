<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['id','title', 'about', 'start_date', 'end_date', 'location'];
}
