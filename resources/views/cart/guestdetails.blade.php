@include('layouts.header');
<div class="body-wrapper">
    <div class="wrapper-padding">    	
	    <form class="hotel-booking-form" action="/guestpay" method="get">
		        <input type="hidden" name="_token" value="{{ csrf_token() }}">
		        <?php
		        $k = Session::get('hotel');
		        ?>
		        <p class="form-row">
					<label>Name : </label><input type="text" name="cname" class="room-input" >
				</p>
				<p class="form-row">
					<label>Email : </label><input type="email" name="cemail" class="room-input" >
				</p>
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