<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
    public $fillable = ['order_id','items_id','items_name','qty','price']; 
}
