 @include('layouts.admin')

<div class="container">


    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('foods_menus.create') }}"> Create New Food Menu</a>

            </div>

        </div>

    </div>

<h1>All the Food Menus</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Food Name</td>
            <td>Price</td>
            <td>Food Category</td>
            <td>Restaurant</td>
            <td>Image</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($foods_menus as $key => $value)
        <tr>
            
            <td>{{ $value->foodname }}</td>
            <td>{{ $value->price }}</td>
            <?php
            $y = $value->category_name;
            $category_name = DB::table('food_categories')->where('id', $y)->pluck('category_name');
            
            ?>
            @foreach($category_name as  $value2)
            <td><?php  echo $value2;?></td>
            @endforeach
            <?php
            $x = $value->restaurants_name;

            $restaurants_name = DB::table('restaurants_masters')->where('id', $x)->pluck('restaurants_name');
            ?>
             @foreach($restaurants_name as  $value1)
              <td><?php  echo $value1;?></td>
          
                @endforeach
        
            
         
            <td><img style="height: 150px;width: 280px;"src ="{{URL::to( $value->images) }}"></img> </td>
          
            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
             <a class="btn btn-primary" href="{{ route('foods_menus.edit',$value->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['foods_menus.destroy', $value->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>

