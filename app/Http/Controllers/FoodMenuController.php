<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\FoodsMenu;



class FoodMenuController extends Controller
{
     public function index(Request $request)
    {
         $foods_menus = FoodsMenu::all();

        // load the view and pass the nerds
        return View::make('admin.foods_menus.index')
            ->with('foods_menus', $foods_menus);
        
    }

   
    public function create()
    {
        return view('admin.foods_menus.create');
    }

   
    public function store(Request $request)
    {
        $FoodsMenu = new FoodsMenu($request->input());
           $this->validate($request, [

            'foodname' => 'required',
            'price' => 'required',
            'category_name' =>'required',
            'restaurants_name'=>'required',
            'images'=>'required'
             
             
        ]);
           $file = $request->file('images') ;
            $fileName = $file->getClientOriginalName() ;
            $request->file('images')->move(public_path('images'), $fileName);

            $FoodsMenu->images = 'images/'.$fileName;
          //  $FoodsMenu->images = public_path('images/' . $fileName);
            //$FoodsMenu->images = $fileName ;
            $FoodsMenu->save() ;


       //request()->file('images')->store('images');
        
   
       // FoodsMenu::create($request->all());

        return redirect()->route('foods_menus.index')

                        ->with('success','Item created successfully');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       
       $FoodsMenu= FoodsMenu::find($id);

        return view('admin.foods_menus.edit',compact('FoodsMenu'));
     
        
    }

    
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'foodname' => 'required',
            'price' => 'required',
            'category_name' => 'required',
            'restaurants_name' => 'required',
            'description' => 'required',
            'images'=>'required'

        ]);


            $FoodsMenu = FoodsMenu::find($id);

            $file = $request->images;

            $fileName = $file->getClientOriginalName() ;
           

            $request->file('images')->move(public_path('images'), $fileName);

            $FoodsMenu->images = 'images/'.$fileName;
            $FoodsMenu->foodname = $request->foodname;
            $FoodsMenu->price = $request->price;
            $FoodsMenu->category_name = $request->category_name;
            $FoodsMenu->restaurants_name = $request->restaurants_name;
             $FoodsMenu->description = $request->description;
            


          //  $FoodsMenu->images = public_path('images/' . $fileName);
            //$FoodsMenu->images = $fileName ;
            $FoodsMenu->save();
               // $task = $FoodsMenu->findOrFail($id);
               // $input = $request->all();
                //$task->fill($input)->save();
                
        return redirect()->route('foods_menus.index')

                        ->with('success','Item updated successfully');
            
    }

   
    public function destroy($id)
    {
         FoodsMenu::find($id)->delete();

          return redirect()->route('foods_menus.index')

                        ->with('success','category deleted successfully');
        
    }


}
