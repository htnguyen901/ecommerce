<?php include 'header.php';?>

</main>
<div style="margin-top:7%; margin-bottom:5%;">
	<h1 style="text-align:center;">This is Product Page</h1>
    <?php
	if(isset($_GET['cat_name'])&& isset($_GET['gender']))
	{
		$cat=$_GET['cat_name'];
		$gender=$_GET['gender'];
    	getProCatMen($cat,$gender);
	}
	?>
</div>
</main>
<?php
include 'footer.php';
?>


