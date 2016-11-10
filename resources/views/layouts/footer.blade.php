<footer class="footer-b">
    <div class="wrapper-padding">
        <div class="footer-left">© Copyright 2016 by Testrix. All rights reserved.</div>        
        <div class="footer-right">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Policy</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</footer> 
</div>


<!-- Footer Scripts -->
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


    <script src="/js/app1.js"></script>
       
  <script src="{{ URL::to('js/jquery-1.11.3.min.js') }}"></script>
  <script src="{{ URL::to('js/idangerous.swiper.js') }}"></script>
  <script src="{{ URL::to('js/slideInit.js') }}"></script>
  <script src="{{ URL::to('js/jqeury.appear.js') }}"></script>
  <script src="{{ URL::to('js/custom.select.js') }}"></script> 
  <script src="{{ URL::to('js/jquery-ui.min.js') }}"></script>
  <script src="{{ URL::to('js/script.js') }}"></script>

  <script src="{{ URL::to('js/jquery.formstyler.js') }}"></script>  
   <script src="{{ URL::to('js/bxSlider.js') }}"></script>
   <script>
    $(document).ready(function(){
        'use strict';
        (function($) {
            $(function() {
                $('.side-block input').styler({
                    selectSearch: true
                });
            });
        })(jQuery);
        
        var slider_range = $("#slider-range");
        var ammount_from = $("#ammount-from");
        var ammount_to = $("#ammount-to");
        
        $(function() {
            slider_range.slider({
              range: true,
              min: 0,
              max: 1500,
              values: [ 275, 1100 ],
              slide: function( event, ui ) {
                ammount_from.val(ui.values[0]+'$');
                ammount_to.val(ui.values[1]+'$');
              }
            });
            ammount_from.val(slider_range.slider("values",0)+'$');
            ammount_to.val(slider_range.slider("values",1)+'$');
        });
    });
  </script>

</body>
</html>
