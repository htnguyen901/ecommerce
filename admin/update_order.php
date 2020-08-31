<?php
include '../db.php';

$ord_id=$_GET['ord_id'];

$update_ord= "update ordertotal set order_status=2 where orderID=$ord_id";

$run_update=mysqli_query($con,$update_ord);

if ($run_update)
{
	echo "Order is finished";
	echo "<br><br><a href='view_order.php'>Back to Main Order Page </a>";
	}
?>