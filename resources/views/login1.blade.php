

@include('layouts.header')
<div class="body-wrapper">
    <div class="wrapper-padding">
        <div class="login-form">
        <h1 class="entry-title">Login</h1>
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
                    <a href="/signup" class="authorize-btn">Sign Up</a>

                    <a href="{{ url('/password/email') }}" class="authorize-forget-pass">Forgot your password?</a>
                    <div class="clear"></div>
                </footer>
                <a href="{{url('/guest')}}" class="guest-login">Login as guest</a>
            </form>
        </div>
    </div><!-- wrapper-padding -->
</div><!-- body-wrapper -->

            @include('layouts.footer')