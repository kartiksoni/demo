 @include('layouts.admin')
<?php 
$itemes = DB::table('orderitems')->where('order_id', $order->order_id)->get();


?>
<div class="body-wrapper">
    <div class="wrapper-padding">
        <table>
            <thead>
        <tr>
            <th><h3>Customer Details</h3></th>
        </tr>
          </thead>
          <tbody>
            <tr>
            <tr>
             <td>
                Name : <?php echo $order->name ?>
             </td>
            </tr>
             <tr>
             <td>
                Email :<?php echo $order->email; ?>
             </td>
            </tr>

           </tr>



          </tbody>
      </table>
        <table>
            <thead>
        <tr>
            <th><h3>Shipping Details</h3></th>
        </tr>
          </thead>
          <tbody>
            <tr>
            <tr>
             <td>
                Hotel Name : <?php echo $order->hotel_name ?>
             </td>
            </tr>
             <tr>
             <td>
                Address :<?php echo $order->address1; ?>
             </td>
            </tr>
              <tr>
             <td>
                city :<?php echo $order->city; ?>
             </td>
            </tr>
              <tr>
             <td>
                state :<?php echo $order->state; ?>
             </td>
            </tr>
           
           </tr>



          </tbody>
      </table>
            
   

    <h1 class="entry-title">iteams</h1>
    <table class="shop_table shop_table_responsive cart">
        <thead>
            <tr>
                <th>iteam name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>
  

            <?php foreach($itemes as $row) :?>
             
                <tr>
                    <td><?php echo $row->items_name; ?></td>
                    <td><?php echo $row->qty; ?></td>
                    <td><?php echo $row->price; ?></td>
                    <td><?php echo $row->price * $row->qty; ?></td>
                    
                </tr>


            <?php endforeach;?>

        </tbody>

      
    </table>

    <div class="cart-collaterals">
        <div class="cart_totals">
            <h2>iteam Totals</h2>
                <table class="shop_table shop_table_responsive">
                    <tbody>
                         <tr>
                <td colspan="2">&nbsp;</td>
                <td>Tax</td>
                <td>$<?php echo $order->tax; ?></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td><strong>Total</strong></td>
                <td>$<?php echo $order->total; ?></td>
            </tr>                   
                    </tbody>
                </table>
   
        </div>
    </div><!-- cart-collaterals -->
    <div class="clear"></div> 
    <?php 
     Session::set('id', $order->order_id);
     //print_r($order->status);exit;
    ?>
    <form action="/order" method="post" >
       {!! csrf_field() !!}
        <select name="status">
          <option value="Pending" <?php if($order->status == "Pending"){ echo "selected"; } ?>>Pending</option>
          <option value="OrderProcess"<?php if($order->status == "OrderProcess"){echo "selected";} ?>>OrderProcess</option>
          <option value="Completed"<?php if($order->status == "Completed"){echo "selected";} ?> >Completed</option>
          <option value="Cancelled"<?php if($order->status == "Cancelled"){echo "selected";} ?> >Cancelled</option>
       </select>
        <button type="submit" >Update Status</button>
    </form>
  
    </div><!-- wrapper-padding -->
</div>
