
@include('layouts.header')
 <div class="body-wrapper">
    <div class="wrapper-padding">  
        <div class='row'>
            <div class=''>
                <form accept-charset="UTF-8" action="/guestpay"  id="payment-form" method="post">
                    {!! csrf_field() !!}
                    <div class='form-row card'>                        
                        <label class='control-label'>Card number</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text' name="card_no">
                    </div>
                    <div class='form-row'>
                        <div class='card-expiration cvc'>
                            <label class='control-label'>CVC</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvc">
                        </div>
                        <div class='card-expiration expiration'>
                            <label class='control-label'>Expiration</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="expiration_month">
                        </div>
                        <div class='card-expiration expiration'>
                            <label class='control-label'> </label>
                            <input class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text' name="expiration_year">
                        </div>
                    </div>

                    <div class='form-row'>                       
                        <label class='control-label'>Total</label>
                        <input class='form-control' value="<?php echo Cart::total();?>" readonly type='text' name="amount">
                    </div>

                    <div class='form-row'>                        
                        <button class='form-control btn btn-primary submit-button' type='submit'>Payer »</button>                        
                    </div>

                     <div class="clear"></div>
                </form>
            </div>
        </div>
       
    </div><!-- wrapper-padding -->
</div><!-- body-wrapper -->

@include('layouts.footer')