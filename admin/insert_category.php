<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="insert-product-div">
	<form id="form-insert-category" action="" method="post" enctype="multipart/form-data" name="insert-category">
    	<table id="table-insert-category" align="center" style="background-color:#FFF" >

        	<tr>
            	<td id="title-insert" colspan="2" align="center">INSERT CATEGORY</td>
            </tr>
            
            <tr>
            	<td>Category Name</td>
                <td>
                	<input type="text" name="category-name" size="50" required>
                </td>
            </tr>
            
            <tr>
            	<td>Category ID</td>
                <td>
                	<input type="text" name="category-id" size="50" required>
                </td>
            </tr>
            
            
            <tr>
            	<td>Category Description</td>
                <td>
                	<textarea name="description" placeholder="Category Description" rows="20" cols="50"></textarea>
                </td>
            </tr>
            
            <tr>
            	<td colspan="2" align="center">
                	<button id="submit-insert" type="submit" name="create-category">Create Category</button>
                 </td>
            </tr>
            
            
        </table>
    </form>
</div>
</body>
</html>


<?php

	if(isset($_POST['create-category']))
	{
		$category_name= $_POST['category-name'];
		$category_id= $_POST['category-id'];
		$description = $_POST['description'];
		

		/*insert to mySQL*/
		$insert_category= "insert into category (categoryID,categoryName,description) values ($category_id,$category_name,$description)";
		
		$insert_cat = mysqli_query($con,$insert_category);
		
		if($insert_pro)
		{
			echo "Product has been successfully created";
			header("Location:admin_page/insert_product.php");
		}
		
	}



?>