<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Cartalyst\Stripe\Stripe;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Cart;
use App\FoodsMenu;
use View;
use Auth;
use Session;
use DB;
use App\orderdetails;
use App\orderitems;



class ShoppingCartController extends Controller
{
    public function index($id)
    {
    	 
    	 $Menus = FoodsMenu::where('id', $id)->get();
     
    	foreach ($Menus as  $value) {
    	
    	Cart::add($value->id, $value->foodname, 1, $value->price);
    	}

    	
    	//echo "hello";
    return redirect('cart');
    	
    }
    public function increment($id)
    {
        
       
         $qty = Cart::get($id)->qty;
         $uqty = $qty + 1;
         Cart::update($id,$uqty); 
       
          
          return redirect('cart');

    }
     public function decrement($id)
    {
      
         $qty = Cart::get($id)->qty;
         $uqty = $qty - 1;
         Cart::update($id,$uqty); 
      
          
          return redirect('cart');

    }



    public function show()
    {
        return view('cart.view');
    }
    public function pay(\Illuminate\Http\Request $request, \Cartalyst\Stripe\Stripe $stripe)
    {
      $user = Auth::user(); 
      $id = $user->id;
      $name = $user->name;
      $email = $user->email;
      $total = Cart::total();
      $tax = Cart::tax();
      $order_items = Cart::count();
      $status = "pending";
      $roomno = $request->room;
      $k = Session::get('hotel');
      $hotel = DB::table('hotels')->where('hotel_name', $k)->first();
      $shipping_id = $hotel->id;
      $hotelname = $hotel->hotel_name;
      $address = $hotel->address1.$hotel->address2;
      $h_city = $hotel->city;
      $h_state = $hotel->state;
      $h_country = $hotel->country;
      ////////////////////////////////////////////////////////orderdetails////////////////////////////////////////////
      $order = new orderdetails();
      $order->customer_id = $id;
      $order->name = $name;
      $order->email = $email;
      $order->total = $total;
      $order->order_items = $order_items;
      $order->tax = $tax;
      $order->status = $status;
      $order->shipping_id = $shipping_id;
      $order->roomno = $roomno;
      $order->hotel_name = $hotelname;
      $order->address1 = $address;
      $order->city = $h_city;
      $order->state = $h_state;
      $order->country = $h_country;
      $order->save();
      $order_id = $order->id;
      /////////////////////////////////////////////////order_items/////////////////////////////////////////////////////
      foreach(Cart::content() as $row) {
      $orderitems = new orderitems();
      $orderitems->order_id = $order_id;
      $orderitems->items_id = $row->id;
      $orderitems->items_name= $row->name;
      $orderitems->qty = $row->qty;
      $orderitems->price = $row->price;
      $orderitems->save();
       }


     // print_r($hotel->hotel_name);exit;
       $charge = $stripe->charges()->create([
        'amount' => $total,
        'currency' => 'USD',
        'source' => [
            'object'    => 'card',
            'number'    => '4242424242424242',
            'cvc'       => '123',
            'exp_month' => '01',
            'exp_year'  => '2030',
        ]
    ]);
      // dd($charge); 
       if($charge['status'] == 'succeeded')
       {
        Cart::destroy();
        echo"payment done";
       }
       else{
        echo"payment not Done";
       }
 
    }



}

