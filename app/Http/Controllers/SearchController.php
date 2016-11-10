<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;	
use App\FoodsMenu;


class SearchController extends Controller
{
    public function index()
    {
      $place = Input::get('food');




  
  $results = array();
  
  $Restaurants_master = FoodsMenu::where ( 'foodname', 'LIKE', '%' . $place . '%' )
                      ->limit(10)
                      ->get ();
  foreach ($Restaurants_master as $query)
  {
      $results[] = $query->foodname;
  }
return Response::json($results);
    	
        
    }
    public function view()
    {
    	return view('welcome');
    }
}
