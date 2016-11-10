<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Restaurants_master;
use App\Food_category;
use App\FoodsMenu ;
 

class FoodSearchController extends Controller
{
    public function index()
    {
      $category = Input::get('category');
      $restaurant = Input::get ('restaurants');
      $hotel = Input::get('hotels');
      Session::set('hotel', $hotel);
      $k = Session::get('hotel');

       if($restaurant == "" || $hotel == "")
       {
        return view('welcome');
       }

       if(!$restaurant == "" || !$hotel == "" )
         if(!$category == "")
         {
       {
        $restaurants_name = Restaurants_master::where('restaurants_name', $restaurant)->pluck('id');
        $category_name = Food_category::where('category_name', $category)->pluck('id');
        foreach ($category_name as  $value1) {
        
         foreach ($restaurants_name as $value) {
        
         
            $FoodsMenu = FoodsMenu ::where('restaurants_name',$value)->where('category_name',$value1)->limit(10)->paginate(10);
        
           }
         }

           if (count($FoodsMenu) > 0){
               return view ( 'foodsearch' )->withDetails ( $FoodsMenu )->withQuery ( $restaurant );
           }else{
              return view ( 'foodsearch' )->withMessage ( 'No Details found. Try to search again !' );
                }
       }
     }
     else{
      $restaurants_name = Restaurants_master::where('restaurants_name', $restaurant)->pluck('id');
       foreach ($restaurants_name as $value) {
        
         
            $FoodsMenu = FoodsMenu ::where('restaurants_name',$value)->limit(10)->paginate(10);
        
           }

            if (count ( $FoodsMenu  ) > 0)
               return view ( 'foodsearch' )->withDetails ( $FoodsMenu )->withQuery ( $restaurant );
           else
               return view ( 'foodsearch' )->withMessage ( 'No Details found. Try to search again !' );

     }


///////////////////////////////////////////////////////////////////
      


      
    }
    public function view()
    {
    	return view('welcome');
    }
    public function cart()
    {
      
    }
    
}
