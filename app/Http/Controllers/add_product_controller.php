<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class add_product_controller extends Controller
{
	
    public  function index(){
		Cart::add('293ad', 'Product 1', 1, 9.99);
    }
   
}
