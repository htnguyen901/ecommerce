<?php
	include '../db.php';
	
	$ord_id=$_GET['ord_id'];

	$get_ord_de ="SELECT * FROM orderdetails where orderID=$ord_id";

	$run_ord_de =mysqli_query($con,$get_ord_de);
?>
<h1 style="text-align:center">This is Detail Page of order <?php echo $ord_id ?></h1>

<table style="width:90%;margin:0 5%" border = "1">
  <tr>
    <th>Order ID</th>
    <th>Detail ID</th> 
    <th>Product ID</th>
    <th>Quantity</th>
    <th>Price</th>


  </tr>
                    
		<?php
        

        $dem =0;
        $total =0;
		if (mysqli_num_rows($run_ord_de) > 0) {
      
			while($row=mysqli_fetch_array($run_ord_de)){
				?>
        <tr style="text-align:right;"> 
        	<td><?php echo $row['orderID']?> </td> 
            <td><?php echo $row['detailID']?> </td> 
            <td><?php echo $row['productID']?></td>
            <td><?php echo $row['quantity']?></td>
            <td><?php echo $row['detailPrice']?></td>
            
        </tr>
    <?php }
} else {
echo "0 results";
}

mysqli_close($con);
?>
                    
</table>
<br><br><br>

<a href="view_order.php" style="margin:0 46%"> Back to View Order</a>