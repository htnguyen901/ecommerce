<?php

include '../db.php';
if (isset($_GET['pro_id'])) {
    
        $pro_name = $_GET['pro_id'];
        
        $delete_pro = "delete from prodct where productID = '$pro_name'";
        
        if (mysqli_query($con, $delete_pro)) {
            header("Location:select_product.php");
            
        } else {
            echo "Error: " . $delete_pro . "<br>" . mysqli_error($con);
            exit;
        }
        
        
    }

mysqli_close($con);
?>