@include('layouts.admin')

<div class="container">
  
<h1>Edit {{ $restaurants->name }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($restaurants, array('action' => array('Restaurants_master_Controller@update', $restaurants->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('restaurants_name', 'Restaurants Name') }}
		{{ Form::text('restaurants_name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('country', 'Country') }}
		{{ Form::text('country', null, array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
