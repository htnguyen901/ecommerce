<?php
session_start();
include 'db.php';


		// kiểm tra biến session user đã login chưa?
		if(isset($_SESSION['username'])){
			
			$username=$_SESSION['username'];
			
			$get_cus= "select * from useraccount where user_name= '$username'";
				
			$run_cus= mysqli_query($con,$get_cus);
			
			while($row=mysqli_fetch_array($run_cus))
			{		
					
			
				$custID =$row['customerID'];
			}
			
			$get_add= "select * from customer where customerID= $custID";
			
			$run_add=mysqli_query($con,$get_add);
			
			while($row=mysqli_fetch_array($run_add))
			{			
			
				$custAdd =$row['shipping_add'];
			}
			
			// thi làm việc insert dl vào 2 bảng order và orderdetail
			
			//1. lay Cust ID + Add
			if(!empty($_SESSION['cart'])){
				
				$get_cart ="SELECT * FROM prodct where productID in ('".implode("', '", $_SESSION['cart'])."') ";

					
				$run_cart =mysqli_query($con,$get_cart);
		
				$total =0;
			  
				while($row_cart=mysqli_fetch_array($run_cart)){
					$id=$row_cart['productID'];
					$name =$row_cart['name'];
					$price =$row_cart['price'];
					$count= array_count_values($_SESSION['cart']);
					$qty=$count[$id];
					$money =$price * $qty;
					$total =$total +$money;
					$total_item= count($_SESSION['cart']);
				}
			
				//$get_cus= "select * from useraccount where user_name= '$username'";
//				
//				$run_cus= mysqli_query($con,$get_cus);
//				
//				while($row=mysqli_fetch_array($con,$run_cus))
//				{			
//				
//					$custID =$row['customerID'];
//				}
//				
//				$get_add= "select * from customer where customerID= $custID";
//				
//				$run_add=mysqli_query($con,$get_add);
//				
//				while($row=mysqli_fetch_array($con,$run_add))
//				{			
//				
//					$custAdd =$row['shipping_add'];
//				}
	
	
			
				//2. Insert to Order Total
				$create_ord = "insert into ordertotal (customerId,shippingAddress,totalAmount,total_item,order_status) values ($custID,'$custAdd',$total,$total_item,1)";
				
				$create_order=mysqli_query($con,$create_ord);
				
				if($create_order)
				{
					$ord_id = mysqli_insert_id($con);
					
					$get_ord_de= $get_cart;
					
					$run_ord_de=mysqli_query($con,$get_ord_de);

					while($row=mysqli_fetch_array($run_ord_de)){
						
						$id=$row['productID'];
						$name =$row['name'];
						$price =$row['price'];
						$count= array_count_values($_SESSION['cart']);
						$qty=$count[$id];
						$money =$price * $qty;
						$total =$total +$money;
						$total_item= count($_SESSION['cart']);
					
						
						$create_ord_de = "insert into orderdetails (orderID,productID,quantity,detailPrice) values ($ord_id,'$id',$qty,$money)";
					
						$run_order_de=mysqli_query($con,$create_ord_de);
					}
						if($run_order_de)
						{
							echo "<h2 style='text-align:center;'>We have received your order</h2><br>
									<h3 style='text-align:center;'>Thank you for shopping with us</h3><br><br>";
							
							unset($_SESSION['cart']);
							session_destroy();
							session_write_close();
							
							echo "<a href='index.php'>Back to Home Page </a>";
							
							die;
												
						}
					

					
				}
			}
		
		}else{// chuyển tới trang login
			
			header("location:login_form.php");
		}

?>