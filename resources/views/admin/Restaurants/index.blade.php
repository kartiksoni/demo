@include('layouts.admin')
<!DOCTYPE html>


<div class="container">


    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('restaurants.create') }}"> Create New restaurant</a>

            </div>

        </div>

    </div>
<h1>All Restaurants</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            
            <td>Restaurants Name</td>
            <td>City</td>
            <td>State</td>
            <td>Country</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($Restaurants as $key => $value)
        <tr>
           
            <td>{{ $value->restaurants_name }}</td>
            <td>{{ $value->city }}</td>
            <td>{{ $value->state }}</td>
            <td>{{ $value->country }}</td>
        

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('admin/restaurants/' . $value->id . '/edit') }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['restaurants.destroy', $value->id],'style'=>'display:inline']) !!}

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
