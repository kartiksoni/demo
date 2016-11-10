@include('layouts.header');


<div class="main-cont">
    <div class="search-section">
        <div class="mp-slider search-only">
            <!-- // slider // -->
            <div class="mp-slider-row slim-slider">
                <div class="swiper-container">
                    <a href="#" class="arrow-left"></a>
                    <a href="#" class="arrow-right"></a>
                    <div class="swiper-pagination"></div>               
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"> 
                            <div class="slide-section" style="background:url({{ URL::to('img/slider1.jpg') }}) center top no-repeat;">
                            </div>      
                        </div>
                        <div class="swiper-slide"> 
                            <div class="slide-section slide-b" style="background:url({{ URL::to('img/slider2.jpg') }}) center top no-repeat;">
                            </div>      
                        </div>
                        <div class="swiper-slide"> 
                            <div class="slide-section slide-b" style="background:url({{ URL::to('img/slider3.jpg') }}) center top no-repeat;">
                            </div>      
                        </div> 
                        <div class="swiper-slide"> 
                            <div class="slide-section slide-b" style="background:url({{ URL::to('img/slider4.jpg') }}) center top no-repeat;">
                            </div>      
                        </div>            
                    </div>
                </div>
            </div>
            <!-- \\ slider \\ -->
        </div>
        <div class="wrapper-a-holder full-width-search">
            <div class="wrapper-a">
        
            <!-- // search // -->
            <div class="page-search full-width-search search-type-b">
              <div class="search-type-padding">
                <nav class="page-search-tabs">
                    <div class="search-tab active">Restaurant</div>
                    <div class="search-tab">Hotel</div>
                    <!-- <div class="search-tab nth">Tickets</div> -->
                    <div class="clear"></div>   
                </nav>      
                <div class="page-search-content">
                
                    <!-- // tab content hotels // -->
                   
                    
                    <div class="search-tab-content">

                        <div class="page-search-p">
                            <form class="form-horizontal" id="signupForm" role="form" method="get" action="{{ url('/foodsearch') }}">
                            {!! csrf_field() !!}
                        <!-- // -->
                            <div class="search-btn">
                                <!-- // -->
                                <?php
                                $users = DB::table('food_categories')
                                        ->limit(3)
                                        ->get();
                                foreach ($users as $user) {
                                    ?>
                               
                             
                               <input type="radio" name="category" value="<?php echo $user->category_name; ?>">
                                <?php
                                echo $user->category_name;
                                 }

                                ?>
                                <div class="clear"></div>
                            </div>
                            <div class="search-xlarge-i">
                                <div class="srch-tab-line no-margin-bottom">
                                    <label>Search</label>
                                    <div class="srch-tab-line no-margin-bottom">
                                    <div class="select-wrapper">
                                        <select class="custom-select" name="restaurants">
                                            <option></option>
                                            <?php
                                            $users = DB::table('restaurants_masters')->get();
                                             foreach ($users as $user) {
                                            ?>
                                            
                                            <option><?php echo  $user->restaurants_name;?></option>
                                      <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <!-- // -->                         
                            </div>
                        <!-- \\ -->
                        <!-- // -->
                            <div class="search-large-i last">
                                <div class="srch-tab-line no-margin-bottom">
                                    <label>Quick Select</label>
                                    <div class="select-wrapper">
                                        <select class="custom-select" name="hotels">
                                            <option></option>
                                            <?php
                                            $users = DB::table('hotels')->get();
                                             foreach ($users as $user) {
                                            ?>
                                            
                                            <option><?php echo  $user->hotel_name;?></option>
                                      <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <!-- \\ -->                     
                        <div class="clear"></div>
                        </div>
                        <footer class="search-footer">
                           <button type="submit"  id="submit" class="authorize-btn">search</button>                           
                            <div class="clear"></div>
                        </footer>
                    </div>
                    </form>
                    <!-- // tab content hotels // -->
                        
                    <!-- // tab content tours // -->
                      
                    <div class="search-tab-content">
                        <div id="property" class="page-search-p">
                        
                        <!-- // -->
                        <form class="form-horizontal" id="signupForm" role="form" method="POST" action="{{ url('/search') }}">
                            {!! csrf_field() !!}
                        <div class="search-xlarge-i">
                            <!-- // -->
                            <div class="srch-tab-line no-margin-bottom">                            
                                <label>city</label>
                                <div class="input-a"><input type="text" value="" placeholder="vienna"></div>
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->                 
                        </div>
                        <!-- \\ -->
                        <!-- // -->
                        <div class="search-large-i last">
                            <!-- // -->
                            <div class="srch-tab-line no-margin-bottom">
                                <label>Date</label>
                                <div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>    
                                <div class="clear"></div>
                            </div>
                            <!-- \\ -->                 
                        </div>
                        <!-- \\ -->                 
                        <div class="clear"></div>                           
                        </div>
                        <footer class="search-footer">
                            <button type="submit"  id="submit" class="authorize-btn">search</button>
                            <div class="clear"></div>
                        </footer>
                    </div>
                </form>
                    <!-- // tab content tours // -->
                    
                                            
                </div>
            </div>
            </div>
            <!-- \\ search \\ -->

            <div class="clear"></div>   
         </div>
        </div> <!-- \\ wrapper-a-holder \\ -->
    </div><!-- \\ search-section \\ -->
 
</div>
<!-- /main-cont -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
/*$(function()
{
         $( "#food" ).autocomplete({
          source: "{{ URL('/search/index') }}",
          minLength: 1,
         select: function(event, ui) {
        $('#food').val(ui.item.value);
      }
    });
});*/

</script>

@include('layouts.footer')
