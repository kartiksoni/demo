<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodsMenu extends Model
{
    public $fillable = ['foodname','price','category_name','restaurants_name','images','description']; 
}
