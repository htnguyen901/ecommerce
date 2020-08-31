
<div id="insert-product-div">
	<form id="form-insert-category" action="insert_category.php" method="post" enctype="multipart/form-data" >
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



<?php
	include '../db.php';
	if(isset($_POST['create-category']))
	{
		
		$category_name= $_POST['category-name'];
		$category_id= $_POST['category-id'];
		$description = $_POST['description'];
		

		/*insert to mySQL*/
		$insert_category= "insert into category (categoryID,categoryName,description) values ('$category_id','$category_name','$description')";
		
		$insert_cat = mysqli_query($con,$insert_category);
		
		if($insert_cat)
		{
			echo "<script>alert('Category has successfully created')</script>";
			header("Location:select_category.php");
		}
		
	}



?>