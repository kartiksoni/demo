@include('layouts.admin')

    <div class="container">


    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('food_categories.index') }}"> Back</a>

            </div>

        </div>

    </div>
<h1>Edit a category</h1>


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


      {!! Form::model($Food_category, ['method' => 'PATCH','route' => ['food_categories.update', $Food_category->id]]) !!}

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                {{ Form::label('Category Name', 'Category Name') }}

                {!! Form::text('category_name', null, array('placeholder' => 'category_name','class' => 'form-control')) !!}

            </div>
                 {{ Form::submit('Edit the category!', array('class' => 'btn btn-primary')) }}
        </div>

        



    </div>

    {!! Form::close() !!}




