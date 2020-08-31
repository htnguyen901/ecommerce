<?php

include '../db.php';
if (isset($_GET['cat_name'])) {
    
        $cat_name = $_GET['cat_name'];
        
        $delete_cat = "delete from category where categoryName = '$cat_name'";
        
        if (mysqli_query($con, $delete_cat)) {
            header("Location:select_category.php");
            
        } else {
            echo "Error: " . $delete_cat . "<br>" . mysqli_error($con);
            exit;
        }
        
        
    }

mysqli_close($con);
?>