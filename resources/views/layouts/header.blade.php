<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Testrix</title>

    <!-- Fonts -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
 
    <link href="{{ URL::to('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/idangerous.swiper.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">
 
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,700' rel='stylesheet' type='text/css'>  
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>   
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.0.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Main Content -->
<div class="container spark-splash-screen">
    <!-- Branding / Navigation -->
    <div class="overlay"></div>
    <div class="autorize-popup">
        <div class="autorize-tabs">
            <a href="#" class="autorize-tab-a current">Sign in</a>
            <a href="#" class="autorize-tab-b">Register</a>
            <a href="#" class="autorize-close"></a>
            <div class="clear"></div>
        </div>
        <section class="autorize-tab-content">
            <div class="autorize-padding">
                <h6 class="autorize-lbl">Welocome! Login in to Your Accont</h6>
                 <form class="form-horizontal" id="signupForm" role="form" method="POST" action="{{ url('/login') }}" onsubmit="return validateMyForm();">
                        {!! csrf_field() !!}
                 
                       
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">
                <!-- <p id="demo"></p> -->

                              

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                <input type="password" id ="password" class="form-control" name="password" placeholder="Password" >
                <!-- <p id="demo1"></p> -->
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <footer class="autorize-bottom">
                    <button type="submit"  id="submit" class="authorize-btn">Login</button>
                    <a href="{{ url('/password/email') }}" class="authorize-forget-pass">Forgot your password?</a>
                    <div class="clear"></div>
                </footer>
            </form>
            </div>
        </section>
       <section class="autorize-tab-content">
            <div class="autorize-padding">
               <?php
               $currentPath= Route::getFacadeRoot()->current()->uri();
               if($currentPath == "signup")
               {}else{




               ?>
                
                @include('spark::auth.register-stripe')
                <?php } ?>

            </div>
        </section>
    </div>
    <header id="top">   
    <div class="header-b">
        <!-- // mobile menu // -->
            <div class="mobile-menu">
                    
            </div>
        <!-- \\ mobile menu \\ -->
            
        <div class="wrapper-padding">
            <div class="header-logo"><a href="{{ url('/') }}"><img alt="" src="{{ URL::to('img/logo.png') }}" /></a></div>
            <div class="header-right">
                <a href="#" class="menu-btn"></a>
                <?php
                if($user = Auth::user())
                {
                ?>
                <div class="">
                    <a href="/cart">Cart</a>
                </div>
                <?php }else{ ?>
                <div class="header-account">
                    <a href="#">My account</a>
                </div>
                <?php } ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>  
    <script type="text/javascript">
$("#signupForm").validate({
            rules: {

                password: {
                    required: true,
                    minlength: 5
                },

                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address"
            }
        });
                        </script>
</header>