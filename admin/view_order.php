
<?php
include '../db.php';

$show_ord = "select * from ordertotal";
$run_showord = mysqli_query($con, $show_ord);

?>


<h2>ORDER </h2>
<p>Manage Orders</p>
<!--<p><a href="insert_product.php"> New Product</a></p>-->
<table style="width:90%;margin:0 5%" border = "1">
  <tr>
    <th>Order ID</th>
    <th>Customer ID</th> 
    <th>Shipping Address</th>
    <th>Total Amount</th>
    <th>Total Item</th>
    <th>Order Status</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>

<?php if (mysqli_num_rows($run_showord) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($run_showord)) {
        ?>
        <tr style="text-align:right;"> 
            <td><?php echo $row['orderID']?> </td> 
            <td><span><?php echo $row['customerId']?></span> <button>Customer Information</button></td>
            <td><?php echo $row['shippingAddress']?></td>
            <td><?php echo $row['totalAmount']?></td>
            <td><?php echo $row['total_item']?></td>
            <td><?php echo $row['order_status']?></td>
            
            <td style="text-align:center"><a href="order_detail.php?ord_id=<?php echo $row['orderID']?>"><button>Order Detail</button></a></td>
            
            <td style="text-align:center"><a onClick=\"javascript: return confirm('Please confirm deletion');\" href="delete_ord.php?ord_id=<?php echo $row['orderID']?>"><button>Discard Order</button></a></td>
            <td style="text-align:center"><a href="update_order.php?ord_id=<?php echo $row['orderID']?>"><button>Finish Order</button></a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
</table>
