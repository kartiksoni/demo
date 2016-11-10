@include('layouts.header')
<div class="body-wrapper">
    <div class="wrapper-padding">
    	<div class="login-form">
        	<h1 class="entry-title">Register</h1>
			@include('spark::auth.register-stripe')
		</div>
	</div><!-- wrapper-padding -->
</div><!-- body-wrapper -->
 @include('layouts.footer')