@include('layouts.admin')
<div class="container">

<nav class="navbar navbar-inverse">
<div class="pull-right">

                <a class="btn btn-primary" href="{{ route('foods_menus.index') }}"> Back</a>

            
 </div>
</nav>


<h1>Create a Food Menu</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'admin/foods_menus','enctype' =>'multipart/form-data','files'=>true)) }}
    <div class="form-group">
        {{ Form::label('Food name', 'foodname') }}
        {{ Form::text('foodname', Input::old('foodname'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('Price', 'Price') }}
        {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Food Category', 'food category') }}
        <select class="form-control" name="category_name">
            <option>Select Food category</option>
         <?php
                                $users = DB::table('food_categories')->get();
                                foreach ($users as $user) {
                                    ?>
                               
                                <option value="<?php echo $user->id; ?>"><?php echo $user->category_name; ?></option> 
                                <?php
                                 }

                                ?>
      </select>
    </div>
    <div class="form-group">
        {{ Form::label('Restaurant', 'restaurant') }}
        <select class="form-control" name="restaurants_name">
             <option>Select Restaurant name</option>
         <?php
                                $users = DB::table('restaurants_masters')->get();
                                foreach ($users as $user) {
                                    ?>
                               
                                <option value="<?php echo $user->id; ?>"><?php echo $user->restaurants_name; ?></option> 
                                <?php
                                 }

                                ?>
      </select>
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>
     <div class="form-group">
        {{ Form::label('images', 'images') }}
        {{ Form::file('images', Input::old('images'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the category!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
