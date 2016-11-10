<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;
use App\Hotel;
class HotelController extends Controller
{
    public function index()
    {
        
        $hotels = Hotel::all();

       
        return View::make('admin.hotels.index')
            ->with('hotels', $hotels);
    }
    public function create()
    {
        return View::make('admin.hotels.create');
    }

   
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $this->validate($request, [

            'hotel_name' => 'required',
            'address1'=> 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            

        ]);


        Hotel::create($request->all());

        return redirect()->route('hotels.index')

                        ->with('success','hotel created successfully');

   

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $hotels = Hotel::find($id);

        // show the edit form and pass the nerd
        return View::make('admin.hotels.edit')
            ->with('hotels', $hotels);
    }

    
    public function update($id,Request $request)
    {
             $this->validate($request, [

            'hotel_name' => 'required',
            'address1'=> 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            

        ]);
     $task = Hotel::findOrFail($id);
     $input = $request->all();
     $task->fill($input)->save();
      return redirect()->route('hotels.index')

                        ->with('success','hotel created successfully');

       

        
    }

   
    public function destroy($id)
    {
        Hotel::find($id)->delete();

        return redirect()->route('hotels.index')

                        ->with('success','hotel deleted successfully');
    }
}
