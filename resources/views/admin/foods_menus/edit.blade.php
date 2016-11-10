@include('layouts.admin')

    <div class="container">


    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('foods_menus.index') }}"> Back</a>

            </div>

        </div>

    </div>
<h1>Edit a Food Menu</h1>


    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


      {!! Form::model($FoodsMenu, ['method' => 'PATCH','route' => ['foods_menus.update', $FoodsMenu->id],'enctype' =>'multipart/form-data']) !!}

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
              {{ Form::label('Food name', 'Food name') }}
              {{ Form::text('foodname', Input::old('foodname'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
              {{ Form::label('Price', 'Price') }}
              {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
             
            </div>
            <div class="form-group">
           {{ Form::label('category_name', 'Category_name') }}
          
             <select class="form-control" name="category_name">
                 <option >Select Food category</option>
                        <?php
                                $users = DB::table('food_categories')->get();
                                foreach ($users as $user) {?>
                         
                               <option value="<?php echo $user->id;?>" <?php if($FoodsMenu->category_name == $user->id ){echo "selected";}?>><?php echo $user->category_name; ?></option> 
                                  <?php 
                                     
                                 }?>
            </select>
            </div>
    
            <div class="form-group">
            
                  {{ Form::label('Restaurant', 'restaurant') }}
                <select class="form-control" name="restaurants_name">
                     <option>Select Restaurant name</option>
                      <?php
                                $users = DB::table('restaurants_masters')->get();
                             
                                foreach ($users as $user) {?>
                               
                                <option value="<?php echo $user->id;?>" <?php if($FoodsMenu->restaurants_name == $user->id ){echo "selected";}?>><?php echo $user->restaurants_name; ?></option> 
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
             <img src="{{ URL::to($FoodsMenu->images) }}">
      
        {{ Form::file('images', Input::old('images'), array('class' => 'form-control')) }}
        
    
            </div>

                 {{ Form::submit('Edit the category!', array('class' => 'btn btn-primary')) }}
        </div>

        



    </div>

    {!! Form::close() !!}




