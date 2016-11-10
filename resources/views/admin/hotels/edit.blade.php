@include('layouts.admin')

<div class="container">
  
<h1>Edit {{ $hotels->name }}</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($hotels, array('action' => array('HotelController@update', $hotels->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('hotel_name', 'hotel Name') }}
		{{ Form::text('hotel_name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('address1', 'address1') }}
		{{ Form::text('address1', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('address2', 'address2') }}
		{{ Form::text('address2', null, array('class' => 'form-control')) }}
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
		{{ Form::label('country', 'Country') }}
		{{ Form::text('country', null, array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Edit the hotel', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
