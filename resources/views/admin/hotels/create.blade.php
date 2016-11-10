@include('layouts.admin')
<div class="container">
 <nav class="navbar navbar-inverse">
<div class="pull-right">

                <a class="btn btn-primary" href="{{ route('hotels.index') }}"> Back</a>

            
 </div>
</nav>
<h1>Hotels</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'admin/hotels')) }}

    <div class="form-group">
        {{ Form::label('hotel_name', 'hotel_name') }}
        {{ Form::text('hotel_name', Input::old('hotel_name'), array('class' => 'form-control')) }}
        {{ Form::label('address1', 'address1') }}
        {{ Form::text('address1', Input::old('address1'), array('class' => 'form-control')) }}
        {{ Form::label('address2', 'address2') }}
        {{ Form::text('address2', Input::old('address2'), array('class' => 'form-control')) }}
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
        {{ Form::label('state', 'State') }}
        {{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
        {{ Form::label('country', 'Country') }}
        {{ Form::text('country', Input::old('country'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the hotel!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
