<?php
require_once '../db.php';
?>
<style>
	<?php include'admin_style.css'; ?>
</style>
<?php
$pro_id = "";
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
} 
$proId= "";
$proName="";
$gender="";
$brand="";
$prodcut_detail="";
$quantityInStock="";
$price="";
$categoryName="";

$isUpdated = 0;

if ($pro_id !="") {
    $get_pro = "select * from prodct where productID = '$pro_id'";
    $run_pro = mysqli_query($con, $get_pro);
    while($row = mysqli_fetch_assoc($run_pro)) {
        $proId = $row['productID'];
        $proName = $row['name'];
        $gender = $row['gender'];
		$brand=$row['brand'];
		$product_detail=$row['product_detail'];
		$quantityInStock=$row['quantityInStock'];
		$price=$row['price'];
		$categoryName=$row['categoryNAME'];
    }
    $isUpdated = 1;
}
?>
<h2>PRODUCT FORM</h2>
<p>This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="select_product.php">Back to Product page</a></p>
<div class="container">
  <form action="update_product.php" method="POST">
  <input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
  <div class="row">
    <div class="col-25">
      <label for="fname">Product Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="fid" name="product-id" value="<?php echo $proId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="category id..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="product-name" value="<?php echo $proName?>" placeholder="category name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Gender</label>
    </div>
    <div class="col-75">
      <input type="text" id="desc" name="product-gender" value="<?php echo $gender?>" placeholder="category description" >
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Brand</label>
    </div>
    <div class="col-75">
      <input type="text" id="desc" name="product-brand" value="<?php echo $brand?>" placeholder="category description" >
    </div>
  </div>
  
  <div class="row"> 
    <div class="col-25">
      <label for="lname">Product Detail</label>
    </div>
    <div class="col-75">
      <input type="text" id="desc" name="product-detail" value="<?php echo $product_detail?>" placeholder="category description" >
    </div>
  </div>
  
  <div class="row">  
    <div class="col-25">
      <label for="lname">Quantity In Stock</label>
    </div>
    <div class="col-75">
      <input type="text" id="desc" name="product-quantity" value="<?php echo $quantityInStock?>" placeholder="category description" >
    </div>
  </div>
  
  <div class="row">  
    <div class="col-25">
      <label for="lname">Price</label>
    </div>
    <div class="col-75">
      <input type="number" id="desc" name="product-price" value="<?php echo $price?>" placeholder="category description">
    </div>
  </div>
  
  <div class="row">  
    <div class="col-25">
      <label for="lname">Category</label>
    </div>
    <div class="col-75">
      <select name="product-category">
                    	<option> <?php echo $categoryName ?> </option>
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
    </div>
    
  </div>
  
  <div class="row">
    <input type="submit" value="Submit" name="update-product" />
  </div>
  </form>
</div>

<?php
    mysqli_close($con);
?>
