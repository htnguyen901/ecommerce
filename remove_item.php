<?php
session_start();
function delItem($product_id)
{

	foreach ($_SESSION['cart'] as $key => $item) {
		if ($item ==$product_id)
		{
		unset($_SESSION['cart'][$key]);

		}
	}
}

$id=$_GET['pro_id'];
delItem($id);
header("location:shopping_cart.php");

?>