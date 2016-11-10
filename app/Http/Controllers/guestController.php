<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Session;
use DB;
use App\orderdetails;
use App\orderitems;

class guestController extends Controller
{

    public function index(Request $request){

        Session::set('cname', $request->cname);
        Session::set('cemail', $request->cemail);
        Session::set('room', $request->room);

    	return view('guest');
    }
    public function payment(\Illuminate\Http\Request $request, \Cartalyst\Stripe\Stripe $stripe)
    {

      $id = 0;
      $name = Session::get('cname');
      $email = Session::get('cemail');
      $total = Cart::total();
      $tax = Cart::tax();
      $order_items = Cart::count();
      $status = "pending";
      $roomno = Session::get('room');
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
    	$total = Cart::total();
    	$charge = $stripe->charges()->create([
        'amount' => $total,
        'currency' => 'USD',
        'source' => [
            'object'    => 'card',
            'number'    => $request->get('card_no'),
            'cvc'       => $request->get('cvc'),
            'exp_month' => $request->get('expiration_month'),
            'exp_year'  => $request->get('expiration_year'),
        ]
    ]);

  if($charge['status'] == 'succeeded')
       {
        Cart::destroy();
        echo"payment done";
       }
       else{
        echo"payment not Done";
       }

    }
    public function deatils(){
        return view('cart.guestdetails');
    }
}
