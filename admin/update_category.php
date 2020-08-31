<?php
	include '../db.php';
	
	global $con;
	
	$cat_name= $_GET['cat_name'];

	if(isset($_POST['update-category']))
	{
		$cat_id= $_POST['category-id'];
		$desc= $_POST['description'];
		
		
		$update_product= "update category set categoryID= '$cat_id', description= '$desc' where categoryName= '$cat_name'";
		
		$update_pro = mysqli_query($con,$update_product);
		
		if($update_pro)
		{
			echo "<script>alert('Product has been successfully created')<script>";
			
		}
		
	}

header("Location:select_category.php");

?>