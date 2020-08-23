<?php
include ('../db.php');

function getCat()
{
	global $con;
	
	$get_cat= "select * from category";
	
	$run_cat= mysqli_query($con,$get_cat);
	
	while ($row_cat= mysqli_fetch_array($run_cat))
	{
		$categoryID = $row_cat['categoryID'];
		$categoryName = $row_cat['categoryName'];
		$description = $row_cat['description'];
	echo "<li> <a href='#'> $categoryName </a> </li>";
	}
}

function getProMen()
{
	global $con;
	
	$get_pro= "select * from prodct where gender='Men'";
	
	$run_pro= mysqli_query($con,$get_pro);
	
	while ($row_pro= mysqli_fetch_array($run_pro))
	{
		$productName = $row_pro['name'];
		$productDetail = $row_pro['product_detail'];
		$productBrand = $row_pro['brand'];
		$productPrice = $row_pro['price'];
		$productImage = $row_pro['product_img'];
		
		
	echo "<div style='float:left;margin-left: 5%;'>
	
			<a href='#'>
				<img src='produc_img/$productImage' width='100' height='260' />
				
				<p><b> $productName </b></p>
				<p> $productPrice </p>
			
			</a>
	
			<a href='index.php'> <button> Add to Cart </button></a>
			
	
	
		</div>"
		
		;
	}
}

function getProWomen()
{
	global $con;
	
	$get_pro= "select * from prodct where gender='Women'";
	
	$run_pro= mysqli_query($con,$get_pro);
	
	while ($row_pro= mysqli_fetch_array($run_pro))
	{
		$productName = $row_pro['name'];
		$productDetail = $row_pro['product_detail'];
		$productBrand = $row_pro['brand'];
		$productPrice = $row_pro['price'];
		$productImage = $row_pro['product_img'];
		
		
	echo "<div id='show-pro' style='float:left;margin-left: 5%;text-align:center;'>
	
			<a href='#'>
				<img src='produc_img/$productImage' width='100' height='260' />
				
				<p><b> $productName </b></p>
				<p> $productPrice </p>
			
			</a>
	
			<a href='index.php'> <button style='width:100%'> Add to Cart </button></a>
			
	
	
		</div>"
		
		;
	}
}
	
	
	
	
	
?>