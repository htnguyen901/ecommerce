<?php

//	session_start();
//	if(!empty($_GET['pro_id'])){
//		$proid= $_GET['pro_id'];
//		
//		if(isset($_SESSION['cart'][$proid])){
//			$qty=$_SESSION['cart'][$proid] ++;
//		}else{
//			$qty =1;
//		}
//	}else{
//		$_SESSION['cart']=array();
//		
//	}
//	array_push($_SESSION['cart'],$_GET['pro_id']);
//	$qty=1;
//	$_SESSION['cart'][$proid] = $qty;
//	header("location:cart.php");

//
	session_start();
	if(empty($_SESSION['cart']))
	{
		$_SESSION['cart']=array();
	}

	array_push($_SESSION['cart'],$_GET['pro_id']);
	
	header("location:shopping_cart.php");
?>