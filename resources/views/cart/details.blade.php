@include('layouts.header');
<div class="body-wrapper">
    <div class="wrapper-padding">    	
	    <form class="hotel-booking-form" action="/pay" method="post">
		        <input type="hidden" name="_token" value="{{ csrf_token() }}">
		        <?php
		        $k = Session::get('hotel');
		        ?>
		        <p class="form-row">
					<label>Hotel Name : </label> 
					<span class="hotel-txt"><?php echo $k;?></span>
				</p>
				<p class="form-row">
					<label>Room No : </label><input type="text" name="room" class="room-input" >
				</p>
				<p class="form-row">
					<button>Pay</button>
				</p>
				<div class="clear"></div>
	    </form>
	</div><!-- wrapper-padding -->
</div><!-- body-wrapper -->
@include('layouts.footer')