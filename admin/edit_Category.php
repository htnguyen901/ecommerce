<?php
require_once '../db.php';

?>

<style>
<?php include_once 'admin_style.css'; ?>

</style>

<?php

$id = "";
if (isset($_GET['cat_name'])) {
    $cat_name = $_GET['cat_name'];
} 
$cateId= "";
$cateName="";
$desc="";
$isUpdated = 0;

if ($cateId !="") {
    $get_cat = "select * from category where categoryName = $cat_name";
    $run_cat = mysqli_query($con, $get_cat);
    while($row = mysqli_fetch_assoc($run_cat)) {
        $cateId = $row['categoryID'];
        $cateName = $row['categoryName'];
        $desc = $row['description'];
    }
    $isUpdated = 1;
}
?>
<h2>EDIT CATEGORY</h2>
<p>This is function of adminstrator to edit one category.</p>
<p><a href="select_category.php">Back to Category page</a></p>
<div class="container">
  <form action="update_category.php?cat_name=<?php echo $cat_name ?>" method="POST">
  <input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
  
  <div class="row">
    <div class="col-25">
      <label for="fname">Category Name</label>
    </div>
    <div class="col-75">
      <span><?php echo $cat_name?> </span>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="fname">Category Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="fid" name="category-id" value="<?php echo $cateId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="category id..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Description</label>
    </div>
    <div class="col-75">
      <input type="text" id="desc" name="description" value="<?php echo $desc?>" placeholder="category description" >
    </div>
  </div>
  
  <div class="row">
    <input type="submit" value="Submit" name="update-category" />
  </div>
  </form>
</div>


<?php
    mysqli_close($con);
?>
