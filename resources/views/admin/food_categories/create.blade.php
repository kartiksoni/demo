@include('layouts.admin')
<div class="container">

<nav class="navbar navbar-inverse">
<div class="pull-right">

                <a class="btn btn-primary" href="{{ route('food_categories.index') }}"> Back</a>

            
 </div>
</nav>


<h1>Create a category</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'admin/food_categories')) }}

    <div class="form-group">
        {{ Form::label('category_name', 'category_name') }}
        {{ Form::text('category_name', Input::old('category_name'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the category!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
