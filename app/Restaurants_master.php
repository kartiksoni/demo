<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants_master extends Model
{
    public $fillable = ['restaurants_name','city','state','country'];
}
