<?php
	include 'header.php';
//	// kiem tra gio hang rong thi thong bao
	if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
		
		echo "<p style='margin:100px 45%; font-size:24px;'> Cart is Empty!!! </p>";
		echo "<br><br><a href='index.php' style='margin:5% 44%; font-size:24px;'>Continue Shopping</a>";
				
	}
	else
	{


?>


<div class="shopping-container" style="margin-top:100px;">
	<div class="row">
		<div class="col-xs-8" style="width: 90%; margin-left: 5%;">
			<div class="panel panel-info" style="border-color:black;">
				<div class="panel-heading" style="color: #f8f9fa;background-color: #343a40;border-color: #343a40;">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block" style="font-size:16px;background-color:darkgray !important; border-color:black !important;">
									<a href="index.php" style="text-decoration: none;color: white">
                                        <span class="glyphicon glyphicon-share-alt" ></span> Continue shopping
                                    </a>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
                    
                    <?php
							//var_dump($_SESSION['cart']);

					$get_cart ="SELECT * FROM prodct where productID in ('".implode("', '", $_SESSION['cart'])."') ";

					
					$run_cart =mysqli_query($con,$get_cart);
			
					$dem =0;
					$total =0;
				  
					while($row_cart=mysqli_fetch_array($run_cart)){
						$dem = $dem+1;
						$id=$row_cart['productID'];
						$name =$row_cart['name'];
						$gender=$row_cart['gender'];
						$image =$row_cart['product_img'];
						$price =$row_cart['price'];
						$count= array_count_values($_SESSION['cart']);
						$qty=$count[$id];
						$money =$price * $qty;
						$total =$total +$money;
						$total_item= count($_SESSION['cart']);

					echo"
						<form method='post' action='update_cart.php' style='width:100%;'>
						<div class='col-xs-2'>
							<img class='img-responsive' src=produc_img/$image style='width:70px;height:100px;'>
						</div>
                        
                        
                        
						<div class='col-xs-4'>
							<input type='hidden' name='id' value='$id'>
							<h4 class='product-name'><strong>$name</strong></h4>
							<input type='hidden' class='pname' value='$name'>
							
							<h4 class='product-gender'> $gender </h4>
						</div>
						
						<div class='col-xs-6'>
							<div class='col-xs-6 text-right'>
								<h6 style='font-size:14px;'><strong>$price <span class='text-muted'>x</span></strong></h6>
								<input type='hidden' class='pprice' value='$price'>
								
							</div>
							<div class='col-xs-4'>
								<input type='number' name='qty' class='form-control input-sm' value='$qty'>

							</div>
							<div class='col-xs-2'>
								<input type='submit' name='update' style='float:right' value='Update'>
									
								<a href='remove_item.php?pro_id=$id'>
									
										<span class='glyphicon glyphicon-trash'> </span>
									
								</a>	
								
								
							</div>
							<div>
								<h4 style='float:right;'> $money</h4>
							</div>
						</div>
						</form>
						";
					}
                     ?>
                    
					</div>
			
					<hr>
					
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
                        	<h4 class="text-right">Total Items: <strong><?php echo $total_item ?></strong></h4>
							<h4 class="text-right" id="total">Total Price: <strong><?php echo $total ?></strong></h4>
						</div>
						<div class="col-xs-3">
                        	<a href="checkout.php">
                                <button type="submit" name="checkout" class="btn btn-success btn-block" style="background-color:darkgray !important; border-color:darkgray !important;font-size:16px;">
                                    Checkout
                                </button>
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	include 'footer.php';


}
?>