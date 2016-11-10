<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\orderdetails;
use DB;
use Session;

class OrderController extends Controller
{
  public function index(Request $request)
    {
      $orderdetails = DB::table('orderdetails')->paginate(15);
         //$orderdetails = orderdetails::get()->paginate(15);
     

        // load the view and pass the nerds
        return View::make('admin.order.index')
            ->with('order', $orderdetails);
        
    }

    public function show($id)
    {
    	$details = DB::table('orderdetails')->where('order_id', $id)->first();
             return View::make('admin.order.view')
            ->with('order', $details);

    }

  public function update(Request $request)
  {
    $order_id = Session::get('id');

    $status = $request->status;
    orderdetails::where('order_id', $order_id)->update(array(
            'status'    =>  $status
        ));
    return redirect()->route('order.index')

                        ->with('success','Item updated successfully');
    

  
    
  }
}
