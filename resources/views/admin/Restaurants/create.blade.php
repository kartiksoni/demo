@include('layouts.admin')
<div class="container">
 <nav class="navbar navbar-inverse">
<div class="pull-right">

                <a class="btn btn-primary" href="{{ route('food_categories.index') }}"> Back</a>

            
 </div>
</nav>
<h1>Restaurants</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'admin/restaurants')) }}

    <div class="form-group">
        {{ Form::label('restaurants_name', 'Restaurants_name') }}
        {{ Form::text('restaurants_name', Input::old('restaurants_name'), array('class' => 'form-control')) }}
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
        {{ Form::label('country', 'Country') }}
        {{ Form::text('country', Input::old('country'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the restaurants!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
