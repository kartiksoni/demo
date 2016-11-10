<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use App\Restaurants_master;

class Restaurants_master_Controller extends Controller
{
   public function __construct()
    {
       // $data = $this->middleware('auth');

        // $this->middleware('subscribed');
    }
     public function index()
    {
        
        $Restaurants = Restaurants_master::all();

       
        return View::make('admin.Restaurants.index')
            ->with('Restaurants', $Restaurants);
    }

   
    public function create()
    {
        return View::make('admin.Restaurants.create');
    }

   
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $this->validate($request, [

            'restaurants_name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            

        ]);


        Restaurants_master::create($request->all());

        return redirect()->route('restaurants.index')

                        ->with('success','Item created successfully');

   

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $restaurants = Restaurants_master::find($id);

        // show the edit form and pass the nerd
        return View::make('admin.Restaurants.edit')
            ->with('restaurants', $restaurants);
    }

    
    public function update($id,Request $request)
    {
             $this->validate($request, [

            'restaurants_name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            

        ]);
     $task = Restaurants_master::findOrFail($id);
     $input = $request->all();
     $task->fill($input)->save();
      return redirect()->route('restaurants.index')

                        ->with('success','Item created successfully');

       

        
    }

   
    public function destroy($id)
    {
        Restaurants_master::find($id)->delete();

        return redirect()->route('restaurants.index')

                        ->with('success','category deleted successfully');
    }
}
