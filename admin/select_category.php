
<?php
require_once 'db.php';

$show_cat = "select categoryID, categoryName, description from category";
$run_showcat = mysqli_query($conn, $show_cat);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>CATEGORY FORM </h2>
<p>This is function of adminstrator to insert, edit, delete one category.</p>
<p><a href=""> New Category</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Catgory Id</th>
    <th>Category Name</th> 
    <th>Modify Date</th>
    <th></th>
    <th></th>
  </tr>

<?php if (mysqli_num_rows($run_showcat) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($run_showcat)) {
        ?>
        <tr> 
            <td><?php echo $row['categoryID']?> </td> 
            <td><?php echo $row['categoryName']?></td>
            <td><?php echo $row['description']?></td>

            <td><a href="delete_category.php?id=<?php echo $row['categoryName']?>">Delete</a></td>
            <td><a href="file:///D|/School/GREENWICH FPT/WEB DESIGN/Adding_Category.php?id=<?php echo $row['categoryName']?>">Edit</a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>