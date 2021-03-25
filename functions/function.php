<?php
include ('../db.php');

function getCat($gender)
{
	global $con;
	
	$get_cat= "select * from category";
	
	$run_cat= mysqli_query($con,$get_cat);
	
	while ($row_cat= mysqli_fetch_array($run_cat))
	{
		$categoryID = $row_cat['categoryID'];
		$categoryName = $row_cat['categoryName'];
		$description = $row_cat['description'];
	echo "<li> <a href='cat_product.php?cat_name=$categoryName&gender=$gender'> $categoryName </a> </li>";
	}
}

function getProMen()
{
	global $con;
	
	$get_pro= "select * from prodct where gender='Men' order by rand() limit 6";
	
	$run_pro= mysqli_query($con,$get_pro);
	
	while ($row_pro= mysqli_fetch_array($run_pro))
	{
		$product_id= $row_pro['productID'];
		$productName = $row_pro['name'];
		$productDetail = $row_pro['product_detail'];
		$productBrand = $row_pro['brand'];
		$productPrice = $row_pro['price'];
		$productImage = $row_pro['product_img'];
		
		
	echo "<div id='show-men' style='float:left;margin-left: 7%;text-align:center;'>
	
			<a href='product_detail.php?pro_id=$product_id' style='color:black'>
				<img src='produc_img/$productImage' width='100' height='260' />
				
				<p><b> $productName </b></p>
				<p> $productPrice </p>
			
			</a>
	
			<a href='addcart.php?pro_id=$product_id'> <button> Add to Cart </button></a>
			
	
	
		</div>"
		
		;
	}
}

function getProWomen()
{
	global $con;
	
	$get_pro= "select * from prodct where gender='Women' order by rand() limit 6";
	
	$run_pro= mysqli_query($con,$get_pro);
	
	while ($row_pro= mysqli_fetch_array($run_pro))
	{
		$product_id= $row_pro['productID'];
		$productName = $row_pro['name'];
		$productDetail = $row_pro['product_detail'];
		$productBrand = $row_pro['brand'];
		$productPrice = $row_pro['price'];
		$productImage = $row_pro['product_img'];
		
		
	echo "<div id='show-women' style='float:left;margin-left: 7%;text-align:center;'>
	
			<a href='product_detail.php?pro_id=$product_id' style='color:black'>
				<img src='produc_img/$productImage' width='100' height='260' style='overflow:hidden' />
				
				<p><b> $productName </b></p>
				<p> $productPrice </p>
			
			</a>
	
			<a href='addcart.php?pro_id=$product_id'> <button> Add to Cart </button></a>
			
	
	
		</div>"
		
		;
	}
}


	
	
function getProCat($cat,$gender)
{
	global $con;
	
	$get_pro_cat= "select * from prodct where categoryNAME='$cat' and gender='$gender'";
	
	$run_pro_cat= mysqli_query($con,$get_pro_cat);
	
	while ($row_pro_cat= mysqli_fetch_array($run_pro_cat))
	{
		$product_id= $row_pro_cat['productID'];
		$productName = $row_pro_cat['name'];
		$productDetail = $row_pro_cat['product_detail'];
		$productBrand = $row_pro_cat['brand'];
		$productPrice = $row_pro_cat['price'];
		$productImage = $row_pro_cat['product_img'];
		
		
	echo "<div style='float:left;margin:2% 10% 2% 9.5%;text-align:center;'>
	
			<a href='product_detail.php?pro_id=$product_id' style='color:black'>
				<img src='produc_img/$productImage' width='100' height='260' />
				
				<p style='font-size:16px;'><b> $productName </b></p>
				<p style='font-size:14px;'> $productPrice </p>
			
			</a>
	
			<a href='addcart.php?pro_id=$product_id'> <button> Add to Cart </button></a>
			
	
	
		</div>"
		
		;
	}
}
	
?>