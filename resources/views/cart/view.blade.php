@include('layouts.header')
<div class="body-wrapper">
    <div class="wrapper-padding">

    <h1 class="entry-title">Cart(<?php echo Cart::count();?>)</h1>
    <table class="shop_table shop_table_responsive cart">
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
       

            <?php foreach(Cart::content() as $row) :?>
             
                <tr>
                    <td data-title="Product" class="prod-name">
                       <strong><?php echo $row->name; ?></strong>
                       <?php echo ($row->options->has('size') ? $row->options->size : ''); ?>
                    </td>
                     <?php
                      $qty = Cart::get($row->rowId)->qty;
                      $uqty = $qty - 1;
                   //  Cart::update($row->rowId,$uqty); 
                     
                     ?>
                    <td data-title="Qty">
                        <a class="cart-quantity-up" href='{{url("increment/$row->rowId")}}'> + </a>
                        <input class="cart-quantity-input" type="text" name="quantity" value="{{$row->qty}}" autocomplete="off" size="2">
                        <a class="cart-quantity-down" href='{{url("decrement/$row->rowId")}}'> - </a>
                    </td>
                    <td data-title="Price">$<?php echo $row->price; ?></td>
                    <td data-title="Total">$<?php echo $row->total; ?></td>
                    
                </tr>


            <?php endforeach;?>

        </tbody>

      <?php /*  <tfoot>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Subtotal</td>
                <td>$<?php echo Cart::subtotal(); ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Tax</td>
                <td>$<?php echo Cart::tax(); ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td><strong>Total</strong></td>
                <td>$<?php echo Cart::total(); ?></td>
            </tr>
        </tfoot> */ ?>
    </table>

    <div class="cart-collaterals">
        <div class="cart_totals">
            <h2>Cart Totals</h2>
                <table class="shop_table shop_table_responsive">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal">
                                <span class="amount">$<?php echo Cart::subtotal(); ?></span>
                            </td>
                        </tr>
                        <tr class="cart-tax">
                            <th>Tax</th>
                            <td data-title="Subtotal">
                                <span class="amount">$<?php echo Cart::tax(); ?></span>
                            </td>
                        </tr>                    
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total"><strong>
                                <span class="amount">$<?php echo Cart::total(); ?></span>
                                </strong>
                            </td>
                        </tr>                    
                    </tbody>
                </table>

            <div class="proceed-to-checkout">
                <a class="checkout-btn button" href ="/checkout">Proceed to Checkout</a>
            </div>    
        </div>
    </div><!-- cart-collaterals -->
    <div class="clear"></div> 
  
    </div><!-- wrapper-padding -->
</div>
@include('layouts.footer')