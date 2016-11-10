 @include('layouts.admin')

<div class="container">


    <div class="row">

       

    </div>

<h1>All the Order</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Order id</td>
            <td>Name</td>
            <td>Date</td>
            <td>Status</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($order as $key => $value)
        <tr>
            
            <td>{{ $value->order_id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->status }}</td>
            
          
            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
             <a class="btn btn-primary" href="{{ route('order.show',$value->order_id) }}">Edit</a>

            </td>
        </tr>
    @endforeach

    </tbody>
    
</table>
<?php echo $order->render(); ?>
</div>
</body>
</html>

