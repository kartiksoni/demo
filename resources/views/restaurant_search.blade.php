@include('layouts.header')
   <link href="{{ URL::to('css/style1.css') }}" rel="stylesheet">
<!-- main-cont -->
<div class="main-cont">
  <div class="body-wrapper">
    <div class="wrapper-padding">
    <div class="page-head">
      <div class="page-title">Hotels - <span>list style</span></div>
      <div class="breadcrumbs">
        <a href="#">Home</a> / <a href="#">Hotel</a> / <span>List style one</span>
      </div>
      <div class="clear"></div>
    </div>
    <div class="two-colls">
      <div class="two-colls-left">
        
        <div class="srch-results-lbl fly-in">
          <span>2,435 results found.</span>
        </div>
        
        <div class="side-block fly-in">
          <div class="side-block-search">
            <div class="page-search-p">
                        <!-- // -->
                        <div class="srch-tab-line">
                            <label>Place / hotel name</label>
                            <div class="input-a"><input type="text" value="" placeholder="Example:france"></div>
                        </div>
                        <!-- // -->
                        <!-- // -->
                        <div class="srch-tab-line">
                            <div class="srch-tab-left">
                                <label>Check in</label>
                                <div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>    
                            </div>
                            <div class="srch-tab-right">
                                <label>Check out</label>
                                <div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>    
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- \\ -->
                        <!-- // -->
                        <div class="srch-tab-line no-margin-bottom">
                            <div class="srch-tab-3c">
                                <label>Rooms</label>
                                <div class="select-wrapper">
                                <select class="custom-select">
                                    <option>--</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                </div>
                            </div>
                            <div class="srch-tab-3c">
                                <label>adult</label>
                                <div class="select-wrapper">
                                <select class="custom-select">
                                    <option>--</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                </div>
                            </div>
                            <div class="srch-tab-3c">
                                <label>Child</label>
                                <div class="select-wrapper">
                                <select class="custom-select">
                                    <option>--</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- \\ -->
              <button class="srch-btn">Search</button> 
                        </div>        
          </div>          
        </div>
        
        <!-- // side // -->
        <div class="side-block fly-in">
          <div class="side-price">
            <div class="side-padding">
              <div class="side-lbl">Price</div>
              <div class="price-ranger">
                <div id="slider-range"></div>              
              </div>
              <div class="price-ammounts">
                <input type="text" id="ammount-from" readonly>
                <input type="text" id="ammount-to" readonly>
                <div class="clear"></div>
              </div>              
            </div>
          </div>  
        </div>
        <!-- \\ side \\ -->
        <!-- // side // -->
        <div class="side-block fly-in">
          <div class="side-stars">
            <div class="side-padding">
              <div class="side-lbl">Star rating</div>  
              <div class="star-rating-l">Choose Rating</div>
              <div class="star-rating-r">
                <a href="#"><img alt="" src="img/rating-b.png"></a>
                <a href="#"><img alt="" src="img/rating-b.png"></a>
                <a href="#"><img alt="" src="img/rating-b.png"></a>
                <a href="#"><img alt="" src="img/rating-b.png"></a>
                <a href="#"><img alt="" src="img/rating-a.png"></a>
              </div>
              <div class="clear"></div>            
            </div>
          </div>  
        </div>
        <!-- \\ side \\ -->
        <!-- // side // -->
        <div class="side-block fly-in">
          <div class="side-stars">
            <div class="side-padding">
              <div class="side-lbl">Accomodation type</div>  
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  All (823)
                </label>
              </div> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Hotel (326)
                </label>
              </div> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Resort (141)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Residence (241)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Villas (324)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Apartment (214)
                </label>
              </div>           
            </div>
          </div>  
        </div>
        <!-- \\ side \\ -->
        <!-- // side // -->
        <div class="side-block fly-in">
          <div class="side-stars">
            <div class="side-padding">
              <div class="side-lbl">Preferences</div>  
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Bathroom (823)
                </label>
              </div> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Cable TV (326)
                </label>
              </div> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Bed & breakfast (141)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Apartment (241)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Mini bar (324)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Wi - fi (214)
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" />
                  Pets allowed (64)
                </label>
              </div>           
            </div>
          </div>  
        </div>
        <!-- \\ side \\ -->
        
      </div>
      <div class="two-colls-right">
        <div class="two-colls-right-b">
          <div class="padding">
          
            <div class="catalog-head large fly-in">
              <label>Sorting results by:</label>
              <div class="search-select">
                                <select>
                                    <option>Name</option>
                                    <option>Name</option>
                                    <option>Name</option>
                                    <option>Name</option>
                                    <option>Name</option>
                                </select>
                        </div>
              <div class="search-select">
                                <select>
                                    <option>Price</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                </select>
                        </div>
              <div class="search-select">
                                <select>
                                    <option>Rating</option>
                                    <option>Rating</option>
                                    <option>Rating</option>
                                    <option>Rating</option>
                                    <option>Rating</option>
                                </select>
                        </div>
              <div class="search-select">
                                <select>
                                    <option>Popularity</option>
                                    <option>Popularity</option>
                                    <option>Popularity</option>
                                    <option>Popularity</option>
                                    <option>Popularity</option>
                                </select>
                        </div>
              <a href="#" class="show-list"></a>              
              <a href="#" class="show-table"></a>
              <a href="#" class="show-thumbs chosen"></a> 
              <div class="clear"></div>
            </div>
            @if(isset($details))
            @foreach($details as $key => $FoodsMenu )

           
            <div class="catalog-row list-rows">
              
              <!-- // -->
                <div class="cat-list-item fly-in">
                  <div class="cat-list-item-l">
                      <a href="#"><img style="height: 150px;" alt="" src="{{URL::to( $FoodsMenu->images) }}"></a>
                  </div>
                  <div class="cat-list-item-r">
                    <div class="cat-list-item-rb">
                      <div class="cat-list-item-p">
                        <div class="cat-list-content">
                          <div class="cat-list-content-a">
                            <div class="cat-list-content-l">
                              <div class="cat-list-content-lb">
                                <div class="cat-list-content-lpadding">
                                  <div class="offer-slider-link"><a href="#">{{ $FoodsMenu ->foodname }}</a></div>
                                       <?php
                                  $k = $FoodsMenu ->restaurants_name;
                                  $restaurants_name = DB::table('restaurants_masters')->where('id', $k)->pluck('restaurants_name');
                                  foreach ($restaurants_name as  $value) {
                                
                                  ?>
                                  <div class="offer-slider-location"><?php echo $value; ?> </div>
                                  <?php } ?>
                                  <p>{{ $FoodsMenu ->description }}</p>
                                 <!-- <div class="cat-icons">
                                    <span class="cat-icon-01 active"></span>
                                    <span class="cat-icon-02"></span>
                                    <span class="cat-icon-03"></span>
                                    <span class="cat-icon-04"></span>
                                    <span class="cat-icon-05"></span>
                                    <span class="cat-icon-06"></span>
                                    <div class="clear"></div> -->
                                  </div>
                                </div>
                              </div>
                              <br class="clear" />
                            </div>
                          </div>
                          <div class="cat-list-content-r">
                            <div class="cat-list-content-p">
                            <!--  <nav class="stars">
                                                    <ul>
                                                        <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                                                        <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                                                        <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                                                        <li><a href="#"><img alt="" src="img/star-b.png" /></a></li>
                                                        <li><a href="#"><img alt="" src="img/star-a.png" /></a></li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                </nav>
                              <div class="cat-list-review">270 reviews</div>-->
                              <div class="offer-slider-r">
                                                <b>{{ $FoodsMenu ->price }} $</b>
                                                <!--<span>avg/night</span> -->
                                            </div>           
                              <a href="#" class="cat-list-btn">Select</a>   
                            </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                    <br class="clear" />
                  </div>
                  <div class="clear"></div>
                </div>
              <!-- \\ -->
            @endforeach
            
            
            @else
     <p> {{$message}}</p>
    @endif
              
              
            </div>
            
            <div class="clear"></div>
            <?php echo $details->appends(array('category_name' => $FoodsMenu->category_name))->links(); ?>
            
                
          </div>
        </div>
        <br class="clear" />
      </div>
    </div>
    <div class="clear"></div>
    
    </div>  
  </div>  
</div>
<!-- /main-cont -->
@include('layouts.footer')