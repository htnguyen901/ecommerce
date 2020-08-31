<?php
session_start();
include 'db.php';
//var_dump ($_SESSION['cart']);


$id = $_POST['id'];
$qty=$_POST['qty'];
echo $qty;
$count= array_count_values($_SESSION['cart']);
$currentQty=$count[$id];
echo $currentQty;

$sql="select * from prodct where productID='$id'";
		

$rs=mysqli_query($con,$sql);
$r=mysqli_fetch_array($rs);
$qtyInStock=$r['quantityInStock'];

if ($qty>=$qtyInStock)
{
	//need code
}
else if($qty<$qtyInStock)
{
	if ($qty<$currentQty)
	{
		$under=$currentQty-$qty;
		for($i=0;$i<$under;$i++)
		{
				$key = array_search($id, $_SESSION['cart']);
				unset($_SESSION['cart'][$key]);

			}
		
		}
	else
	{
		$over=$qty-$currentQty;
		for($i=0;$i<$over;$i++)
		{
			array_push($_SESSION['cart'],$id);
			}
		}
	}
header("location:shopping_cart.php");


?>