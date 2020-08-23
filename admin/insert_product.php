<!doctype html>
<?php
	include '../db.php';
?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	#insert-product-div
	{
		background-image:url(../images/admin_background.jpg);
		}
	#form-insert-product
	{
		padding:5%;
		opacity: 0.9;
		}
		
	#table-insert-product
	{
		padding:5%;
		border-spacing:10px;
		border-radius:25px;
		}
	#title-insert
	{
		font-size:25px;
		margin:15%;
		text-transform:uppercase;
		text-emphasis:accent;
		}
	#submit-insert
	{
		font-size:16px;
		border-radius:5px;
		transition-duration:0.3s;
		background-color: white;
  		color: black;
		}
	#submit-insert:hover
	{
		background-color: #e7e7e7;
		}
</style>
</head>

<body>
<div id="insert-product-div">
	<form id="form-insert-product" action="" method="post" enctype="multipart/form-data" name="insert-product">
    	<table id="table-insert-product" align="center" style="background-color:#FFF" >

        	<tr>
            	<td id="title-insert" colspan="2" align="center">INSERT PRODUCT</td>
            </tr>
            
            <tr>
            	<td>Product Name</td>
                <td>
                	<input type="text" name="product-name" size="50" required>
                </td>
            </tr>
            
            <tr>
            	<td>Product ID</td>
                <td>
                	<input type="text" name="product-id" size="50" required>
                </td>
            </tr>
            
            <tr>
            	<td>Product Image</td>
                <td>
                	<input type="file" name="product-image" required>
                </td>
            </tr>
            
            <tr>
            	<td>Product Category</td>
                <td>
                	<select name="product-category">
                    	<option> Select a category </option>
                        <?php
                        
						$get_cat= "select * from category";
	
						$run_cat= mysqli_query($con,$get_cat);
						
						while ($row_cat= mysqli_fetch_array($run_cat))
						{
							$categoryID = $row_cat['categoryID'];
							$categoryName = $row_cat['categoryName'];
							$description = $row_cat['description'];
						echo "<option>$categoryName </option>";
						}
                        ?>
 
                    </select>
                </td>
            </tr>
            
            <tr>
            	<td>Product Brand</td>
                <td>
                	<select name="product-brand">
                    	<option> Tommy Hilfiger </option>
                        <option> Longines </option>
                        <option> MVMT </option>
                        <option> MAM </option>
                        <option> Lacoste </option>
                    </select>
                </td>
            </tr>
            
            <tr>
            	<td>Product Gender</td>
                <td>
                	<select name="product-gender">
                    	<option> Men </option>
                        <option> Women </option>
                    </select>
                </td>
            </tr>
            
            <tr>
            	<td>Product Detail</td>
                <td>
                	<textarea name="product-detail" placeholder="Product Description" rows="20" cols="50"></textarea>
                </td>
            </tr>
            
            <tr>
            	<td>Quantity in Stock</td>
                <td>
                	<input type="number" name="product-quantity" size="50" required>
                </td>
            </tr>
            
            <tr>
            	<td>Price</td>
                <td>
                	<input type="number" step="any" name="product-price" size="50" required>
                </td>
            </tr>
            
            <tr>
            	<td colspan="2" align="center">
                	<button id="submit-insert" type="submit" name="create-product">Create Product</button>
                 </td>
            </tr>
            
            
        </table>
    </form>
</div>
</body>
</html>

<?php

	if(isset($_POST['create-product']))
	{
		$product_name= $_POST['product-name'];
		$product_id= $_POST['product-id'];
		
		/*get image*/
		$product_image= $_FILES['product-image']['name'];
		$product_image_tmp= $_FILES['product-image']['tmp_name'];
		/*end getting image*/
		
		move_uploaded_file($product_image_tmp,"../produc_img/$product_image");
		
		$product_category= $_POST['product-category'];
		$product_brand= $_POST['product-brand'];
		$product_gender= $_POST['product-gender'];
		$product_detail= $_POST['product-detail'];
		$product_quantity= $_POST['product-quantity'];
		$product_price= $_POST['product-price'];
		
		/*insert to mySQL*/
		$insert_product= "insert into prodct (productID,name,brand,gender,product_detail,quantityInStock,price,categoryName,product_img) values ('$product_id','$product_name','$product_brand','$product_gender','$product_detail','$product_quantity','$product_price','$product_category','$product_image')";
		
		$insert_pro = mysqli_query($con,$insert_product);
		
		if($insert_pro)
		{
			echo "Product has been successfully created";
			header("Location:admin_page/insert_product.php");
		}
		
	}



?>