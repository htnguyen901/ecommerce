
<?php
include '../db.php';

$show_pro = "select * from prodct";
$run_showpro = mysqli_query($con, $show_pro);

?>


<h2>PRODUCT FORM </h2>
<p>This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="insert_product.php"> New Product</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Product Id</th>
    <th>Name</th> 
    <th>Brand</th>
    <th>Gender</th>
    <th>Product Detail</th>
    <th>Quantity in Stock</th>
    <th>Price</th>
    <th>Category</th>
    <th></th>
    <th></th>
  </tr>

<?php if (mysqli_num_rows($run_showpro) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($run_showpro)) {
        ?>
        <tr> 
            <td><?php echo $row['productID']?> </td> 
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['brand']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['product_detail']?></td>
            <td><?php echo $row['quantityInStock']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['categoryNAME']?></td>
            

            <td><a href="delete_product.php?pro_id=<?php echo $row['productID']?>">Delete</a></td>
            <td><a href="edit_product.php?pro_id=<?php echo $row['productID']?>">Edit</a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
</table>
