<?php
	include '../db.php';
	
	global $con;

	if(isset($_POST['update-product']))
	{
		$product_name= $_POST['product-name'];
		$product_id= $_POST['product-id'];
		
		$product_category= $_POST['product-category'];
		$product_brand= $_POST['product-brand'];
		$product_gender= $_POST['product-gender'];
		$product_detail= $_POST['product-detail'];
		$product_quantity= $_POST['product-quantity'];
		$product_price= $_POST['product-price'];
		
		
		$update_product= "update prodct set name= '$product_name',brand= '$product_brand',gender= '$product_gender',product_detail='$product_detail',quantityInStock=$product_quantity,price=$product_price,categoryNAME='$product_category' where productID= '$product_id'";
		
		$update_pro = mysqli_query($con,$update_product);
		
		if($update_pro)
		{
			echo "<script>alert('Product has been successfully created')<script>";
			
		}
		
	}

header("Location:select_product.php");

?>