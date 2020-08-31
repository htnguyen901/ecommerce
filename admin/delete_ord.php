<?php

include '../db.php';
if (isset($_GET['ord_id'])) {
    
        $get_ord = $_GET['ord_id'];

        
        $delete_ord_de = "delete from orderdetails where orderID = $get_ord";
        
        if (mysqli_query($con, $delete_ord_de)) {
			
			$delete_ord = "delete from ordertotal where orderID = $get_ord";
			if (mysqli_query($con,$delete_ord));
			{
            	header("Location:view_order.php");
			}
        } else {
            echo "Error: " . $delete_ord_de . "<br>" . mysqli_error($con);
            exit;
        }
        
        
    }

mysqli_close($con);

?>