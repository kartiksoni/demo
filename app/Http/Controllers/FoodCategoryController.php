<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use App\Food_category;


class FoodCategoryController extends Controller
{
    
    
    public function index(Request $request)
    {
         $food_categories = Food_category::orderBy('id','DESC')->paginate(5);

        return view('admin.food_categories.index',compact('food_categories'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }

   
    public function create()
    {
        return view('admin.food_categories.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [

            'category_name' => 'required',

        ]);


        Food_category::create($request->all());

        return redirect()->route('food_categories.index')

                        ->with('success','Item created successfully');

   

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       

     
        $Food_category= Food_category::find($id);

        return view('admin.food_categories.edit',compact('Food_category'));
    }

    
    public function update(Request $request, $id)
    {
            $this->validate($request, [

            'category_name' => 'required',

        ]);


        Food_category::find($id)->update($request->all());

        return redirect()->route('food_categories.index')

                        ->with('success','Item updated successfully');
    }

   
    public function destroy($id)
    {
        Food_category::find($id)->delete();

        return redirect()->route('food_categories.index')

                        ->with('success','category deleted successfully');
    }


}
