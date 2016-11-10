@include('layouts.admin')

<div class="container">


    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('food_categories.create') }}"> Create New category</a>

            </div>

        </div>

    </div>

<h1>All the Food Categories</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Category Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($food_categories as $key => $value)
        <tr>
            
            <td>{{ $value->category_name }}</td>
        

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
             <a class="btn btn-primary" href="{{ route('food_categories.edit',$value->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['food_categories.destroy', $value->id],'style'=>'display:inline']) !!}

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

