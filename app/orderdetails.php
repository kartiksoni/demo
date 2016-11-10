<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetails extends Model
{
    public $fillable = ['order_id','customer_id','name','email','total','tax','order_items','status','shipping_id','roomno','hotel_name','address1','city','state','country']; 
}
