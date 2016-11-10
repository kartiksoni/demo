
@include('layouts.header')
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Restaurant name</td>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $key => $Restaurants_master)
        <tr>
            <td>{{ $Restaurants_master->restaurants_name }}</td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
      {{$message}}
    @endif
</div>
@include('layouts.footer')