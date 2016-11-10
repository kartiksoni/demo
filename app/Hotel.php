<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $fillable = ['hotel_name','address1','address2','city','state','country'];
}
