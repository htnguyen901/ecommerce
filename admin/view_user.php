
<?php
include '../db.php';

$show_cus = "select * from customer";
$run_showcus = mysqli_query($con, $show_cus);

?>


<h2>CUSTOMER INFORMATION </h2>
<p>This is function of adminstrator to view all Customer Details.</p>
<p><a href="admin_index.php"> Back to Admin Page</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Customer Id</th>
    <th>Customer Name</th> 
    <th>Phone Number</th>
    <th>Shipping Address</th>
    <th>Email Address</th>
  </tr>

<?php if (mysqli_num_rows($run_showcus) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($run_showcus)) {
        ?>
        <tr> 
            <td><?php echo $row['customerID']?> </td> 
            <td><?php echo $row['cusName']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['shipping_add']?></td>
            <td><?php echo $row['cusEmail']?></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
</table>
