<style>
	<?php include'admin_style.css'; ?>
</style>

<?php
	include '../db.php';
?>


<div id="insert-product-div">
	<form id="form-insert-product" action="insert_product.php" method="post" enctype="multipart/form-data">
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
							$category_Name = $row_cat['categoryName'];
							$description = $row_cat['description'];
						echo "<option>$category_Name </option>";
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


<?php
	global $con;

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
		
		
		$insert_product= "insert into prodct(productID,name,brand,gender,product_detail,quantityInStock,price,categoryNAME,product_img) values ('$product_id','$product_name','$product_brand','$product_gender','$product_detail',$product_quantity,$product_price,'$product_category','$product_image')";
		
		$insert_pro = mysqli_query($con,$insert_product);
		
		if($insert_pro)
		{
			echo "<script>alert('Product has been successfully created')<script>";
			
		}
		
	}



?>