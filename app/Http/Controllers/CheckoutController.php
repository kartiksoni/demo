<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use View;
use Auth;
use Session;

class CheckoutController extends Controller
{
   public function __construct()
    {
      // $this->middleware('auth');
        // $this->middleware('subscribed');
    }
    public function index()
    {
    
      if($user = Auth::user())
     {
     
      return view("cart.details");
     }
     else{
      //echo "logout";exit;
      $login = "checkout";
      Session::set('login', $login);
    	return redirect()->route('login');
    }
    }
    public function register()
    {
      return view('register1');
    }
}
